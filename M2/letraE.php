<?php
    // e) Crie um programa que informe quantas letras, digitos e palavras estгo 
    // presentes na string "Na preparaзгo para a final da Copa do Mundo, a Franзa estб em ritmo 
    // de recuperaзгo fнsica depois da semifinal contra a Bйlgica. Nesta quinta-feira (12/julho/2018), 
    // 5 jogadores sequer foram a campo".
    
    $frase = "Na preparaзгo para a final da Copa do Mundo, a Franзa estб em ritmo de recuperaзгo fнsica depois da semifinal contra a Bйlgica. Nesta quinta-feira (12/julho/2018), 5 jogadores sequer foram a campo";
    
    $frase_sem_espaco = preg_replace("/\s+/", "", $frase);
    $quantidadeLetras = strlen("$frase_sem_espaco");
    echo "\nVersгo 1 -> A quantidade de Letras na frase й: $quantidadeLetras";
    
    // Versгo 2 - Converte uma string para array 
    $fraseParaArray = str_split($frase_sem_espaco);
    $quantidadeLetrasTotal =  count ($fraseParaArray);
    echo "\nVersгo 2 -> A quantidade de Letras na frase й: $quantidadeLetrasTotal";
    
    // acredito que o nъmero 5 nгo estб sendo contado como palavra pois nгo estб escrito por extenso
    
    $quantidadePalavras = count(explode(" ", $frase));
    echo "\nA quantidade de Palavras na frase й: $quantidadePalavras";
    
    $frase_para_numeros = preg_replace('~\D~', '', $frase);
    $quantidadeDigitos = strlen($frase_para_numeros);
    echo "\nA quantidade de dнgitos й: $quantidadeDigitos";
       
?>