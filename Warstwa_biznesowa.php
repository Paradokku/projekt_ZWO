<?php
require('Warstwa_dostepu_do_danych.php');
$zapytanie_SQL = '';

function pobierzZadanie(){
    return wezZadania();
}

function wbDodajZadanie(string $tytul, string $tresc){
    #TODO
}

function wbUsunZadanie(int $id){
    #TODO
}

function wbPobierzDaneZadania(int $id, string $tytul, string $tresc){
    return pobierzDaneZadania($id);
}

function wbEdytujZadanie(int $id, string $tytul, string $tresc){
    #TODO
}
?>