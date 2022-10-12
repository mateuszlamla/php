<?php

$link = mysqli_connect('localhost', 'root', '', 'dane');

if(array_key_exists('tytul', $_POST) && array_key_exists('gatunek', $_POST) && array_key_exists('rok', $_POST) && array_key_exists('ocena', $_POST)){

    $dodaj_film = "INSERT
        filmy(
            id,
            gatunki_id,
            tytul,
            rok,
            ocena)
        VALUES(
            '',
            {$_POST['gatunek']},
            '{$_POST['tytul']}',
            {$_POST['rok']},
            {$_POST['ocena']}
        )";
    $result_dodaj_film = mysqli_query($link, $dodaj_film);
    
    
    echo "Film {$_POST['tytul']} został dodany do bazy";

}
mysqli_close($link);
?>