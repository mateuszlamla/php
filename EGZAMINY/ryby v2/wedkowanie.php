<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>Klub wędkowania</title>
        <link rel="stylesheet" href="styl2.css">
    </head>

    <body>
        <header>
            <h2>Wędkuj z nami!</h2>
        </header>

        <section class="lewy">
            <img src="ryba3.jpg" alt="Szczupak">
        </section>

        <section class="prawy">
            <h3>Ryby spokojnego żeru(białe)</h3>
            <?php
            $con=mysqli_connect('localhost','root','','wedkowanie');
            
            $sql="SELECT ryby.id, ryby.nazwa, ryby.wystepowanie FROM ryby WHERE ryby.styl_zycia=1;";
            $resoult=mysqli_query($con,$sql);

            while($row=mysqli_fetch_row($resoult)){
                echo $row[0]." ".$row[1]." Występuje w: ".$row[2]."<br>";
            }

            mysqli_close($con);
            ?>

            <ol>
                <li>
                    <a href="https://wedkuje.pl/" target="_blank">Odwiedź także</a>
                </li>

                <li>
                    <a href="http://www.pzw.org.pl/" target="_blank">Polski Związek Wędkarski</a>
                </li>
            </ol>
        </section>

        <footer>
            <p>Stronę wykonał: XYZ</p>
        </footer> 
    </body>
</html>