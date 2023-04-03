<?php

    require_once 'dane_logowania_db.php';

    $polaczenie = @new mysqli($host, $uzytkownik, $haslo_bd, $baza);

    if($polaczenie->connect_errno!=0)
    {
        echo "Error: ".$polaczenie->connect_errno;
    }

    else
    {
        $wynik_zapytania = @$polaczenie->query("SELECT nazwa FROM zajecia;");

        $ile_wynikow_zapytania = $wynik_zapytania->num_rows;

        if($ile_wynikow_zapytania>0)
        {
            for($i=0; $i<$ile_wynikow_zapytania; $i++)
            {
                $opcja = $wynik_zapytania->fetch_assoc(); 
                echo  '<option value="'.$opcja['nazwa'].'">'.$opcja['nazwa'].'</option>';
            }
            
        }
    }

    $polaczenie->close();

?>