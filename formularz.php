<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="masa" placeholder="masa"><br>
        <input type="text" name="wzrost" placeholder="wzrost"><br>
        <input type="submit" value="OBLICZ BMI"><br>
        <?php
            if(array_key_exists('masa', $_POST) && array_key_exists('wzrost', $_POST)){
                $bmi = round($_POST['masa']/pow($_POST['wzrost']/100, 2), 2);
                echo $bmi;

            }
        
        ?>
    </form>    
</body>
</html>