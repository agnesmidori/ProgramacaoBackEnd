<?php
    // a) Inicialize um vetor de 20 inteiros com valores sorteados entre 0 e 100; 
    // em seguida, some todos elementos deste vetor e apresente o resultado.
    

    $acumulaSoma = 0;
    
    for($i=0; $i < 20; $i++) {
        $array [$i] = rand (0, 100);
        printf ($array [$i]);
        echo "  ";
        $acumulaSoma += $array[$i];
    }
    echo "\n\nresultado: $acumulaSoma";
  
?>
