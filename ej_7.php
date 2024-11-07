<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php
    /*Crea un script para desplazar los 0 al final del array, respetando el orden del resto de valores. Muestra el array. 
    Puedes usar un array de prueba, por ejemplo: [2, 5, 7, 0, 4, 0, 7, -5, 8, 0]. 
    Puedes usar array_splice, array_push y implode si te son útiles.*/
    $numeros=[2, 5, 7, 0, 4, 0, 7, -5, 8, 0];
    for ($i=0;$i<count($numeros);$i++){
     $value=$numeros[$i];
     if($value== 0){
         array_splice($numeros,$i,1); 
         array_push($numeros,0); 
     }
    }
    var_dump($numeros);
    ?>
</body>
</html>