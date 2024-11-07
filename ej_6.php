<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php
    /*Haz un array con 10 notas. A continuación, elimina la nota mas baja y la más alta (solo una, en caso de estar repetida). 
    Haz la media de las que quedan. Puedes comprobar si los datos són numéricos con la función is_numeric.
    Además puedes usar también array_splice y implode si te son útiles.*/
    $notas=["maria"=> 5,"pedro"=> 8,"andrea"=> 5,"jose"=> 9,"sara"=> 8,"pepe"=> 7,"anastasia"=> 9];
    $minimo= min($notas);
    $maximo=max($notas);
    $eliminados=false;
    $eliminados2=false;
    $media=0;
    foreach($notas as $nombre=>$nota){
        $posicion1=array_search($minimo,array_values($notas));
        $posicion2=array_search($maximo,array_values($notas));
        if($eliminados !== true && $nota==$minimo){
                array_splice($notas,$posicion1,1);
                $eliminados=true;
        }elseif($eliminados2 !== true && $nota==$maximo){
                array_splice($notas,$posicion2,1);
                $eliminados2=true;
            }
        }
       $media= array_sum($notas)/count($notas); 
      echo "la media de las notas es $media";
      var_dump($notas);



    ?>
</body>
</html>