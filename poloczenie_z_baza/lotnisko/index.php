<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<form action="rezerwacja.php" method="POST">
	<input type="text" placeholder="imie" name="imie"><br>
	<input type="text" placeholder="nazwisko" name="nazwisko"><br>
	<input type="text" placeholder="miasto zamieszkania" name="miastoz"><br>
	
	<?php

		$link = mysqli_connect('localhost', 'root', '', 'porty_lotnicze') or die("Błąd");
	/*	$miasta_sql = "SELECT DISTINCT(odloty.miasto) FROM odloty";
		$result_miasto_sql = mysqli_query($link, $miasta_sql);

		echo 'MIASTA: ';
		echo '<ul>';
		while($row = mysqli_fetch_row($result_miasto_sql)){
			echo '<li>' . $row[0] . '</li>';
		}
		echo '</ul>';
	*/
		$odloty_sql = "SELECT odloty.id, odloty.miasto, odloty.data FROM odloty";
		$result_odloty_sql = mysqli_query($link, $odloty_sql);
		
		echo '<select name="kierunek">';
		while($row_odloty = mysqli_fetch_row($result_odloty_sql)){
			echo '<option value="'.$row_odloty[0].'"> ' . $row_odloty[1].", " . $row_odloty[2].'</option>';
		}
		echo '</select>';

		mysqli_close($link);
	?>	
	<br>
	<input type="reset" value="Wyczysc">
	<input type="submit" value="zarezerwuj"><br>
</form>


</body>
</html>