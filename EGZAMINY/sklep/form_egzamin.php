<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <select name="produkty" id="produkty">
            <option value="7">Gumka do mazania</option>      
            <option value="8">Cienkopis</option>
            <option value="9">Pisaki 60 szt.</option>
            <option value="10">Markery 4szt.</option>
        </select>
        <button type="submit">WYBIERZ</button>
        <br>
    <?php
        $link = mysqli_connect('localhost','root', '','sklep' );

        if(array_key_exists('produkty', $_POST)){
            $cena_po_rabacie = 0;

            $pobierz_ceny = "SELECT towary.cena FROM towary WHERE towary.id = {$_POST['produkty']}";
            
            $result_pobierz_ceny = mysqli_query($link, $pobierz_ceny);
            while($row = mysqli_fetch_assoc($result_pobierz_ceny)){
            
                $cena_po_rabacie = round($row['cena'] * 0.85, 2);
                echo $cena_po_rabacie;
            }  
        }
        mysqli_close($link);
    ?>
</form>
    
</body>


</html>
