<?php
    // b) Preencha uma matriz do tipo float de 5 colunas e 4 linhas
    // com valores aleatórios entre 10 e 30. Em seguida descubra e
    // apresente o maior e o menor valor presente nesta matriz.
    
    global $matriz;
    $menorNum = 31.0;
    $maiorNum = 9.0;
    
    for($linha=0; $linha < 4; $linha++) {
        for($coluna=0; $coluna < 5; $coluna++) {
            $matriz [$linha] [$coluna] = mt_rand (10.0*10, 30.0*10) / 10;
            printf ($matriz [$linha] [$coluna]);
            echo "  ";
            if ($matriz [$linha] [$coluna] <= $menorNum) {
                $menorNum = $matriz [$linha] [$coluna];
            }
            elseif ($matriz [$linha] [$coluna] >= $maiorNum) {
                $maiorNum = $matriz [$linha] [$coluna];
            }
        }
    }
    echo "\n\nO menor número é: $menorNum";
    echo "\nO maior número é: $maiorNum";
?>
