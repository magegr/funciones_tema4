<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php
    /*Modifica el script anterior, de forma que, en vez de crear dos arrays, los números pares se almacenen en la fila 0 de un array 
    bi-dimensional, y los impares en la fila 1 del mismo array. Almacena inicialmente los números en un array uni-dimensional y 
    haz la separación a posteriori.*/
    $numeros=[1,2,3,4,5,6,7,8,9];
    $numeros_2=[];
    
    for($i=0;$i<count($numeros);$i++){
        $resto=$numeros[$i]%2;
        if($resto == 0){
            $numeros_2[0][]=$numeros[$i];
        }else{
            $numeros_2[1][]=$numeros[$i];
        }
    }
    var_dump($numeros_2[0]);
    var_dump($numeros_2[1]);
    
    ?>
</body>
</html>