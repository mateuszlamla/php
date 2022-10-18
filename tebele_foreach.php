<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body{
            background-color: bisque;
            font-size: 150%;
            text-align: center;
            margin: 15%;
        }
    </style>
<?php

$products = [
    'rower' => [
        'producent' => 'kross',
        'cena' => '1500',
        'kolor' => 'zielony'
    ],
    'skarpetki' => [
        'producent' => 'nike',
        'cena' => '40',
        'kolor' => 'białe'
    ],
    'buciorki' => [
        'producent' => 'adidas',
        'cena' => '400',
        'kolor' => 'czarne'
    ]
];


foreach($products as $produkty => $data){
    if($data['cena'] < 1000){
        echo '<b>' . $produkty . '</b> <br>' . 'Producent: <i>' . $data['producent'] . 
        '</i><br> Cena: <i>' . $data['cena'] . ' zł </i><br> Kolor: <i>' . $data['kolor'] . '</i><br><br>';
    }
}

?>
    
</body>
</html>

