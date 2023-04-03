<?php
    
    session_start();

    require_once "dane_logowania_db.php";

    $polaczenie = @new mysqli($host, $uzytkownik, $haslo_bd, $baza);

    if($polaczenie->connect_errno!=0)
    {
        echo "Error: ".$polaczenie->connect_errno;
    }

    else
    {
        $email = $_POST['email'];
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $zajecia = $_POST['zajecia'];
        $data = $_POST['data'];

        /*Mimo znaczników required na HTML sprawdzam jeszcze raz czy formularz jest wypełniony*/
        if(($email=="")||($imie=="")||($nazwisko=="")||($zajecia=="")||($data==""))
        {
            $_SESSION['Error'] = "Uzupełnij poprawnie wszystkie dane";
            header ("Location: zapis-na-zajęcia");
        }

        else
        {

            $wynik_zapytania1 = @$polaczenie->query('SELECT email FROM osoby WHERE email="'.$email.'";');

            $ile_wynikow_zapytania1 = $wynik_zapytania1->num_rows;

            /*Jeśli dana osoba po raz pierwszy rejestruje się na zajęcia zostaje dodane do bazy danych osób korzystajacych z siłowni. Zakładam, że email jest unikatowy, reszta nie*/
            if($ile_wynikow_zapytania1==0)
            {
                @$polaczenie->query('INSERT INTO osoby (id_osoba, imie, nazwisko, email) VALUES ("", "'.$imie.'", "'.$nazwisko .'", "'.$email.'");');
            }

            /* Jeśli dana osoba jest już w bazie danych pomijam powyższy krok i sprawdzam czy dana osoba jest już zapisana na wybrane zajęcia wybranego dnia*/
           
            $wynik_zapytania2 = @$polaczenie->query('SELECT email, nazwa, data FROM ((rezerwacje INNER JOIN osoby ON rezerwacje.osoba = osoby.id_osoba )INNER JOIN zajecia ON rezerwacje.zajecia = zajecia.id_zajecia) WHERE email="'.$email.'" AND nazwa="'.$zajecia.'" AND data="'.$data.'";');

            $ile_wynikow_zapytania2 = $wynik_zapytania2->num_rows;

            if($ile_wynikow_zapytania2==1)
            {
                $_SESSION['Error'] = "Jesteś już zapisany na te zajęcia";
                header ("Location: zapis-na-zajęcia");
            }

            else
            {
                $wynik_zapytania3 = @$polaczenie->query('SELECT id_osoba FROM osoby WHERE imie="'.$imie.'" AND nazwisko="'.$nazwisko.'" AND email="'.$email.'";');

                $rekord1 = $wynik_zapytania3->fetch_assoc(); 

                $id_osoba = $rekord1['id_osoba'];

                $wynik_zapytania4 = @$polaczenie->query('SELECT id_zajecia FROM zajecia WHERE nazwa="'.$zajecia.'";');

                $rekord2 = $wynik_zapytania4->fetch_assoc(); 

                $id_zajecia = $rekord2['id_zajecia'];

                @$polaczenie->query('INSERT INTO rezerwacje (id_rezerwacja, osoba, zajecia, data) VALUES ("", "'.$id_osoba.'", "'.$id_zajecia.'", "'.$data.'");');

                $_SESSION['It_works'] = "<script type='text/javascript'>window.onload = my; function my(){ alert('".$imie.", Twoja rezerwacja została dokonana!'); }</script>";

                header ("Location: zapis-na-zajęcia");
            }

        }
    }



    $polaczenie->close();

?>