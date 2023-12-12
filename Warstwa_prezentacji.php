<html>
<body>
        <h1>Aplikacja TODO</h1>
        <h3>Dodaj Zadanie:</h3>
        <form action="dodajZadanie()" method="post">
            Id:    <input type="text" name="id"><br>
            Tytul: <input type="text" name="tytul"><br>
            Tresc: <input type="text" name="tresc"><br>
            <input type="submit" value="Dodaj">
            <input type="submit" value="Edytuj">
            <input type="submit" value="Usun">
        </form>
</body>
</html>

<?php
require('Warstwa_biznesowa.php');
$array = [];

wyswietlZadania($array);

function dodajZadanie(){
    wbDodajZadanie();
    #Tutaj użytkownik uruchamia u siebie wyswietlZadania()
}

function usunZadanie(int $id){
    wbDodajZadanie();
    #Tutaj użytkownik uruchamia u siebie wyswietlZadania()
}

function edytujZadanie(int $id){
    $zadanie = wbPobierzDaneZadania($id,'','');

    if ($warunek == 'zatwierdzono'){

    } elseif ($warunek == 'anulowano') {
        #Tutaj użytkownik uruchamia u siebie wyswietlZadania()
    }
}

function wyswietlZadania($array){
    $array = pobierzZadanie();
    while($row = $array->fetch_assoc()) {
        echo "<b>Numer Zadania:</b> " . $row["id"]. "<br><b>Tytul:</b> " . $row["tytul"]. "<br><b>Tresc:</b> " . $row["tresc"]. "<br><br>";
      }
    #TODO while row - Zadanie isnt empty -> wbPobierzDaneZadania();
}
?>