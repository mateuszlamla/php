<?php
$link = mysqli_connect('localhost', 'root', '', 'wedkowanie') or die('blad');

if(array_key_exists('imie', $_POST) && array_key_exists('nazwisko', $_POST) && array_key_exists('adres', $_POST)){

    $insert_sql = "INSERT INTO Karty_wedkarskie 
    (
        id,
        imie,
        nazwisko,
        adres,
        data_zezwolenia,
        punkty
    )
    VALUES
    (
        NULL,
        '{$_POST['imie']}',
        '{$_POST['nazwisko']}',
        '{$_POST['adres']}',
        NULL,
        NULL
    )";
    $result_insert_sql = mysqli_query($link, $insert_sql);

}

mysqli_close($link)

?>