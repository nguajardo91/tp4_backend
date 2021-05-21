<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<center><h3>EJERCICIO 1</h3>

<?php

$numeros = [2,4,6,8,10,12,14,16,18,20];

foreach ($numeros as $valor) {
    echo "<p>$valor</p>";
}

?>

<h3>EJERCICIO 2</h3>

<?php

$valores = ["Pedro", "Ana", 34, 1];

    print_r ($valores);


?>

<h3>EJERCICIO 3</h3>

<?php

$datos = [ 
    "Nombre"=>"Pedro", 
    "Apellido"=>"Torres",
    "Dirección"=> "Av. Mayor 3703", 
    "Teléfono"=> 1122334455
];

foreach ($datos as $indice => $valor) {
    echo "<p>$indice = $valor</p>";
}

?>

<h3>EJERCICIO 4</h3>

<?php

$ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];

foreach ($ciudades as $indice => $valor) {
    $indice == $ciudades;
    echo "La ciudad con índice $indice tiene el nombre de $valor<br>";
};

?>

<h3>EJERCICIO 5</h3>

<?php

$ciudades = ["MD" => "Madrid",
             "BCL" => "Barcelona", 
             "LD" => "Londres", 
             "NY" => "New York", 
             "LA" => "Los Ángeles", 
             "CCG" => "Chicago"
            ];

foreach ($ciudades as $indice => $valor) {
    $indice == $ciudades;
    echo "El índice $valor es $indice<br>";
   
};

?>





</body>
</html>