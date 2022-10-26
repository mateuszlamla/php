<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkujemy</title>
    <link rel="stylesheet" href="styl_1.css">
</head>

<body>
    <div class="baner">
        <h1>Portal dla wędkarzy</h1>
    </div>
    <div class="lewy">
        <h2>Ryby drapieżne naszych wód</h2>
        <ul>
            <?php
                // $link = mysqli_connect('localhost', 'root', '', 'wedkowanie');
                // $qr = "SELECT `nazwa`, `wystepowanie` FROM `ryby` WHERE `styl_zycia` = 1";
                // $result = mysqli_query($link, $qr);
                // while($row = mysqli_fetch_assoc($result)){
                //     echo "<li>" . $_row['nazwa'] . ", wysępowanie: " . $row['wystepowanie'];
                // }
                // mysqli_close($link); 
            ?>
        </ul>
    </div>
    <div class="prawy">
        <img src="ryba1.jpg" alt="Sum"><br>
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </div>
    <footer>
        <p>Stronę wykonał: Mateusz Lamla</p>
    </footer>
</body>

</html>