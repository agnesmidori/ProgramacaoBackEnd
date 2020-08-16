<?php
    // e) Crie um programa que informe quantas letras, digitos e palavras estão 
    // presentes na string "Na preparação para a final da Copa do Mundo, a França está em ritmo 
    // de recuperação física depois da semifinal contra a Bélgica. Nesta quinta-feira (12/julho/2018), 
    // 5 jogadores sequer foram a campo".
    
    $frase = "Na preparação para a final da Copa do Mundo, a França está em ritmo de recuperação física depois da semifinal contra a Bélgica. Nesta quinta-feira (12/julho/2018), 5 jogadores sequer foram a campo";
    
    $frase_sem_espaco = preg_replace("/\s+/", "", $frase);
    $quantidadeLetras = strlen("$frase_sem_espaco");
    echo "\nVersão 1 -> A quantidade de Letras na frase é: $quantidadeLetras";
    
    // Versão 2 - Converte uma string para array 
    $fraseParaArray = str_split($frase_sem_espaco);
    $quantidadeLetrasTotal =  count ($fraseParaArray);
    echo "\nVersão 2 -> A quantidade de Letras na frase é: $quantidadeLetrasTotal";
    
    $quantidadePalavras = count(explode(" ", $frase));
    echo "\nA quantidade de Palavras na frase é: $quantidadePalavras";
    
    $frase_para_numeros = preg_replace('~\D~', '', $frase);
    $quantidadeDigitos = strlen($frase_para_numeros);
    echo "\nA quantidade de dígitos é: $quantidadeDigitos";
       
?>
