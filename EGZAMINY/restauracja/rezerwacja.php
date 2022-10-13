<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restauracja Wszystkie Smaki</title>
</head>
<body>


<?php

$link = mysqli_connect('localhost', 'root', '', 'restauracja');

if(array_key_exists('data', $_POST) && array_key_exists('ilosc_osob', $_POST) && array_key_exists('telefon', $_POST)){
    $insert_sql = "INSERT INTO
    rezerwacje(
        id, 
        data_rez, 
        liczba_osob, 
        telefon)
    VALUES(
        NULL,
        '{$_POST['data']}',
        {$_POST['ilosc_osob']},
        '{$_POST['telefon']}'
    )";  

    $result_insert_sql = mysqli_query($link, $insert_sql);

    echo "Dodano rezerwację do bazy";
}

mysqli_close($link);

?>
    
</body>
</html>
