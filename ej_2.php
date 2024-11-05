<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
    /*Escribe un script para encontrar los duplicados sin usar funciones de array. Coloca estos valores previamente en un array.*/
    $duplicados=[1,2,3,3,4,5,5,6];
    $numeros=[];
    for($i=0;$i<count($duplicados);$i++){
        for($j=0;$j<count($duplicados);$j++){
            if ($j!==$i && ($duplicados[$i]==$duplicados[$j])){
                $numeros[]=$duplicados[$i];
                break;
            }
    }
}

var_dump($numeros);
    
    
    
    ?>
</body>
</html>