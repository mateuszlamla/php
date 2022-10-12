<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" >
        <input type="text" name="imie" placeholder="imie"><br>
        <input type="text" name="nazwisko" placeholder="nazwisko"><br>

            <?php
                $link = mysqli_connect('localhost', 'root', '', 'przychodnia') or die("blad");
                
                $pobierz_choroby = "SELECT choroby.id, choroby.nazwa FROM choroby";
                $result_pobierz_choroby = mysqli_query($link, $pobierz_choroby);

                echo "<select name=\"choroba\" id=\"choroba\">";
                while($row_choroby = mysqli_fetch_assoc($result_pobierz_choroby)){
                    echo "<option value=\"{$row_choroby['id']}\"> {$row_choroby['nazwa']} </option> ";
                }
                echo "</select>";
                
                if(array_key_exists('imie', $_POST) && array_key_exists('nazwisko', $_POST) && array_key_exists('choroba', $_POST)){
                    $dodaj_pacjenta = "INSERT INTO 
                    pacjenci(
                        id, 
                        imie, 
                        nazwisko, 
                        choroba) 
                    VALUES(
                        NULL,
                        '{$_POST['imie']}',
                        '{$_POST['nazwisko']}',
                        {$_POST['choroba']}
                    )";
                    $result_dodaj_pacjenta = mysqli_query($link, $dodaj_pacjenta);
                }

                mysqli_close($link);
            ?><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>