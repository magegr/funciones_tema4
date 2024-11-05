<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
    /*Escribe un script separar los valores de un array en dos arrays: 
    los pares en uno y en el otro los impares.*/
    $numeros=[1,2,3,4,5,6,7,8,9];
    $pares=[];
    $impares=[];
    
    for($i=0;$i<count($numeros);$i++){
        $resto=$numeros[$i]%2;
        if($resto == 0){
            $pares[]=$numeros[$i];
        }else{
            $impares[]=$numeros[$i];
        }
    }
    var_dump($pares);
    var_dump($impares);
   ?>
</body>
</html>