<?php 

$max = 1; 
$aleatorio = mt_rand(1, $max); //Genereamos aleatorio 
$usados[] = $aleatorio; //Guardamos el primero en un array ya que el primero no puede estar repetido 

for ($i = 0; $i < 6; $i++) { 
     
    $aleatorio = mt_rand(1, $max); //Generamos aleatorio 
    while(in_array($aleatorio,$usados)) { //buscamos que no este repetido 
        $aleatorio = mt_rand(1, $max); 
    } 

    $usados[] = $aleatorio;    //No esta repetido, luego guardamos el aleatorio 
} 
?>