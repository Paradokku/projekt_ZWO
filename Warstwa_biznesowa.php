<?php
require('Warstwa_dostepu_do_danych.php');
$zapytanie_SQL = '';

function pobierzZadanie(){
    return wezZadania();
}

function wbDodajZadanie(string $tytul, string $tresc){
    dodajZadanie($tytul,$tresc);
}

function wbUsunZadanie(int $id){
    #Nie używane w żadnym diagramie
}

function wbPobierzDaneZadania(int $id, string $tytul, string $tresc){
    return pobierzDaneZadania($id);
}

function wbEdytujZadanie(int $id, string $tytul, string $tresc){
    edytujZadanie($id,$tytul,$tresc);
}
?>