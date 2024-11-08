<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php
    /* Crea un script para realizar la transposición del array bi-dimensional, es decir, 
    convertir las columnas en filas, y las filas en columnas, por ejemplo:

[ 1, 5, 8, 5]
[ 7, 3, 2, 4]
[ 1, 6, 2, 4]

Se convertiría en:

[ 1, 7, 1 ]
[ 5, 3, 6 ]
[ 8, 2, 2 ]
[ 5, 4, 4 ]

Puedes usar las funciones que quieras.*/

$nueva=[
    
];
$array=[
/*0*/[ 1, 5, 8, 5],
/*1*/[ 7, 3, 2, 4],
/*2*/[ 1, 6, 2, 4],
];
for( $i=0;$i<count($array);$i++){
    for($j=0;$j<count($array[$i]);$j++){
        $nueva[$j][]=$array[$i][$j];
    }
}
var_dump($nueva);
    ?>
</body>
</html>