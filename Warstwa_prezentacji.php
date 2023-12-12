<?php
require('Warstwa_biznesowa.php');
$array = [];

wyswietlZadania($array);

function dodajZadanie(){
    wbDodajZadanie();
}

function usunZadanie(int $id){
    #TODO
}

function edytujZadanie(int $id){
    #TODO
}

function wyswietlZadania($array){
    #TODO while Zadanie isnt empty -> wbPobierzDaneZadania();
}
?>