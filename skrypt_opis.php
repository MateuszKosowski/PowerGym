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
        $zajecia = $_POST['zajecia'];

        $wynik_zapytania = @$polaczenie->query('SELECT nazwa, opis FROM zajecia WHERE nazwa="'.$zajecia.'";');

        $ile_wynikow_zapytania = $wynik_zapytania->num_rows;

        if($ile_wynikow_zapytania==1)
        {
                $rekord = $wynik_zapytania->fetch_assoc(); 
                $_SESSION['opis'] = '<h1>'.$rekord['nazwa'].'</h1><br><p>'.$rekord['opis'].'</p>';
        }

    }

    header ("Location: zapis-na-zajęcia");

    $polaczenie->close();

?>