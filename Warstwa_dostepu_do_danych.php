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

// #Koliduje z funkcją w Wartstwie prezentacji
// function dodajZadanie(string $tytul, string $tresc){
//     $zapytanie = "INSERT INTO Zadania  (tytul,tresc) VALUES ($tytul,$tresc)";
//     $zadanie = $GLOBALS['baza']->query($zapytanie);
// }

function usunZadania(int $id){
    #Nie uzywane w żadnym diagramie
}

function daneZadanie(int $id, string $tytul, string $tresc){
    #Nie używane w żadnym diagramie
}

// function edytujZadanie(int $id, string $tytul, string $tresc){
//     $zapytanie = "UPDATE Zadania SET tytul='$tytul', tresc='$tresc' WHERE id=$id";
//     $zadanie = $GLOBALS['baza']->query($zapytanie);
// }

function pobierzDaneZadania(int $id){
    $zapytanie = "SELECT * FROM Zadania WHERE id=$id";
    $zadanie = $GLOBALS['baza']->query($zapytanie);
    return $zadanie;
    
}

?>