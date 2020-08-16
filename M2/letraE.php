<?php
    // e) Crie um programa que informe quantas letras, digitos e palavras est�o 
    // presentes na string "Na prepara��o para a final da Copa do Mundo, a Fran�a est� em ritmo 
    // de recupera��o f�sica depois da semifinal contra a B�lgica. Nesta quinta-feira (12/julho/2018), 
    // 5 jogadores sequer foram a campo".
    
    $frase = "Na prepara��o para a final da Copa do Mundo, a Fran�a est� em ritmo de recupera��o f�sica depois da semifinal contra a B�lgica. Nesta quinta-feira (12/julho/2018), 5 jogadores sequer foram a campo";
    
    $frase_sem_espaco = preg_replace("/\s+/", "", $frase);
    $quantidadeLetras = strlen("$frase_sem_espaco");
    echo "\nVers�o 1 -> A quantidade de Letras na frase �: $quantidadeLetras";
    
    // Vers�o 2 - Converte uma string para array 
    $fraseParaArray = str_split($frase_sem_espaco);
    $quantidadeLetrasTotal =  count ($fraseParaArray);
    echo "\nVers�o 2 -> A quantidade de Letras na frase �: $quantidadeLetrasTotal";
    
    // acredito que o n�mero 5 n�o est� sendo contado como palavra pois n�o est� escrito por extenso
    
    $quantidadePalavras = count(explode(" ", $frase));
    echo "\nA quantidade de Palavras na frase �: $quantidadePalavras";
    
    $frase_para_numeros = preg_replace('~\D~', '', $frase);
    $quantidadeDigitos = strlen($frase_para_numeros);
    echo "\nA quantidade de d�gitos �: $quantidadeDigitos";
       
?>