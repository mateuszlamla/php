<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<title>Wynajmujemy samochody</title>
</head>
<body>
	<div class="main">
		<div class="baner">
			<h1>Wynajem Samochodów</h1>
		</div>
		<div class="lewy">
			<h2>DZIŚ POLECAMY TOYOTĘ ROCZNIK 2014</h2>
			<?php
                $conn = mysqli_connect('localhost', 'root', '', 'wynajem');
                $query = 'SELECT `id`, `model`, `kolor` FROM `samochody` WHERE `marka` LIKE "Toyota" AND `rocznik` = 2014';
                $wynik = mysqli_query($conn,$query);
                while($row=mysqli_fetch_row($wynik)){
                    echo '<p>'.$row[0].' Toyota '.$row[1].'. Kolor: '.$row[2].'</p>';
                };
                mysqli_close($conn);
			?>
			<h2>WSZYSTKIE DOSTĘPNE SAMOCHODY</h2>
			<?php
                $conn = mysqli_connect('localhost', 'root', '', 'wynajem');
                $query = 'SELECT `id`,`marka`, `model`, `rocznik` FROM `samochody`';
                $wynik = mysqli_query($conn,$query);
                while($row=mysqli_fetch_row($wynik)){
                    echo '<p>'.$row[0].' '.$row[1].' '.$row[2].' '.$row[3].'</p>';
                }
                mysqli_close($conn);
			?>
		</div>
		<div class="srodek">
			<h2>ZAMÓWIONE AUTA Z NUMERAMI TELEFONÓW KLIENTÓW</h2>
			<?php
                $conn = mysqli_connect('localhost', 'root', '', 'wynajem');
                $query = 'SELECT samochody.id, samochody.model, zamowienia.telefon FROM zamowienia inner join samochody on samochody.id=zamowienia.samochody_id';
                $wynik = mysqli_query($conn,$query);
                while($row=mysqli_fetch_row($wynik)){
                    echo '<p>'.$row[0].' '.$row[1].' '.$row[2].'</p>';
                }
                mysqli_close($conn);
			?>
		</div>
		<div class="prawy">
			<h2>NASZA OFERTA</h2>
            <ul>
			    <li>Fiat</li>
			    <li>Toyota</li>
			    <li>Opel</li>
			    <li>Mercedes</li>
            </ul>
			<p>Tu pobierzesz naszą <a href="Komis.sql">bazę danych </a></p>
			<p>Autor stron: xyz</p>

		</div>

	</div>

</body>

</html>
