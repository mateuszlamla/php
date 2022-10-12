

    <!DOCTYPE html>
    <html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>piłka nożna</title>
        <link rel="stylesheet" href="styl2.css">
    </head>
    <body>
        <div class="baner">
            <h3>Reprezentacja polski w piłce nożnej</h3>
            <img src="obraz1.jpg" alt="reprezentacja">
        </div>
        <main>
            <div class="lewy">
                <form action="liga.php" method="POST">
                    <select name="pozycje" id="pozycje">
                        <option value="1">Bramkarze</option>
                        <option value="2">Obrońcy</option>
                        <option value="3">Pomocnicy</option>
                        <option value="4">Napastnicy</option>
                    </select>
                    <button type="submit" name="zobacz">ZOBACZ</button>
                </form>
                <img src="zad2a.png" alt="piłka">
                <br><br>
                <p>Autor: Mateusz Lamla 4B</p>
            </div>
            <div class="prawy">
                <ol>
                    <?php
                    
                    if (isset($_POST['zobacz'])) {
                        $link = mysqli_connect('localhost','root','','egzamin');
                        $zawodnicy = "SELECT imie, nazwisko from zawodnik WHERE pozycja_id = {$_POST['pozycje']}";
                        $result = $link->query($zawodnicy);
                        while ($wiersz = mysqli_fetch_assoc($result)) {
                            $imie = $wiersz['imie'];
                            $nazwisko = $wiersz['nazwisko'];
                            echo "<br><li> $imie&nbsp;$nazwisko </li>";
                        }
                        $result = $link->query($zawodnicy);
                    }
                    mysqli_close($link)
                    ?>
                </ol>
            </div>
        </main>
        
        <h3>Liga mistrzów</h3>
        
        <div class="liga_mistrzow">
            <?php
            $link = mysqli_connect('localhost','root','','egzamin');
            $tabelka = "SELECT zespol, punkty, grupa FROM liga
            ORDER BY punkty DESC";
            $result = $link->query($tabelka);
            while ($row = $result->fetch_assoc()) {
                $zespol = $row['zespol'];
                $punkty = $row['punkty'];
                $grupa = $row['grupa'];

                echo '<div class="liga">';
                echo "<br><h2>$zespol</h2>";
                echo "<h1><br>$punkty<br><br></h1>";
                echo "<p>Grupa: $grupa</p><br>";
                echo '</div>';
            }
            mysqli_close($link)
            ?>
        </div>
    </body>
    </html>


