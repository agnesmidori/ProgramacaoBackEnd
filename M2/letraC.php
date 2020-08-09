<?php
    // c) Crie um programa que calcule e mostre os números primos entre 0 e 200, 
    //apresentando ao final a soma destes números;
    
    global $acumulaPrimo;
    
    
    $acumulaPrimo = 0;
    
    for ($numero = 2; $numero <= 200; $numero++) {
        $contaDivisores = 0;
        for ($divisor = 2; $divisor <= $numero; $divisor++) {
            if ($numero % $divisor == 0) {
                $contaDivisores++;
            }
        }
        if ($contaDivisores == 1) {
            $acumulaPrimo += $numero;
            // visualização para conferência de dados
            echo "$numero";
            echo "  ";
        }
    }
    
    echo "\n\nA soma dos números primos entre 0 e 200 é: $acumulaPrimo";
?>
