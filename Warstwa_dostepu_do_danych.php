<?php
$adres_ip_mysql = "localhost";
$nazwa_bazy = "projekt_zwo";
$login = "root";
$haslo = "";

$baza = new mysqli($adres_ip_mysql, $login, $haslo, $nazwa_bazy);

function wezZadania(){
    $zapytanie = "SELECT * FROM Zadania";
    $wynik = $GLOBALS['baza']->query($zapytanie);
    return $wynik;
}

// function dodajZadanie(string $tytul, string $tresc){
//     #Koliduje z funkcją w Wartstwie prezentacji
// }

function usunZadania(int $id){
    #Nie uzywane w żadnym diagramie
}

function daneZadanie(int $id, string $tytul, string $tresc){
    #Nie używane w żadnym diagramie
}

function edytujZadania(int $id, string $tytul, string $tresc){
    #TODO 
}

function pobierzDaneZadania(int $id){
    $zapytanie = "SELECT * FROM Zadania WHERE id=$id";
    $zadanie = $GLOBALS['baza']->query($zapytanie);
    return $zadanie;
}

?>