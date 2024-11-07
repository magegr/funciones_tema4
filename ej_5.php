<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php
    /*Crea un script para contar cuantas repeticiones de cada 
    valor aparecen en un array. Puedes usar la función in_array 
    y array_push si las consideras aplicable..*/
    $numeros=[1,6,3,4,5,6,6,8,9];
    $numeros_repetidos=[];
  
    for($i=0;$i<count($numeros);$i++){
        $contador=0;
       if(in_array($numeros[$i], $numeros_repetidos)){
           continue;
       }
        for($j=0;$j<count($numeros);$j++){
            if($numeros[$i] == $numeros[$j] && ($i!== $j)){
                $numeros_repetidos[] = $numeros[$i];
                $contador++;
            }
        }
        echo "el numero ".$numeros[$i] ." se repite <br>"; 
        var_dump($numeros_repetidos);
    }
    ?>
</body>
</html>