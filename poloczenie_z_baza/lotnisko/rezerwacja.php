<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php
    if(isset($_POST['imie']) && isset($_POST['nazwisko']) && isset($_POST['miastoz'])){
        $link = mysqli_connect('localhost', 'root', '', 'porty_lotnicze') or die("Błąd");

        $odloty_sql = "SELECT odloty.id, odloty.miasto, odloty.data FROM odloty";
        $result_odloty_sql = mysqli_query($link, $odloty_sql);

        $insert_sql="INSERT klienci VALUES ('', '{$_POST['imie']}', '{$_POST['nazwisko']}', '{$_POST['miastoz']}', '{$_POST['kierunek']}')";
        $result_insert_sql = mysqli_query($link, $insert_sql);
        echo $_POST['imie'] . " " . $_POST['nazwisko'] . " został dodany do bazy";
    
    }else{
        echo "Wprowadź poprawne dane";
    }
    mysqli_close($link);
    
?>
<br>
<a href="index.php"> Wróć do menu</a>

</body>
</html>