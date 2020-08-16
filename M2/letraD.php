<?php
    // d) Elabore um programa que leia os seguintes dados de 5 usuários: nome, sobrenome, idade e CPF. 
    // Por fim, mostre os dados (de cada usuário) ordenados pela idade;
    
    $usuario = array (
                        array ('nome' => 'Leonardo',
                                      'sobrenome' => 'DaVinci',
                                      'idade' => 50,
                                      'cpf' => 1),
        
                        array ('nome' => 'Frida',
                                      'sobrenome' => 'Khalo',
                                      'idade' => 40,
                                      'cpf' => 2),      
        
                        array ('nome' => 'Fernanda',
                                      'sobrenome' => 'Montenegro',
                                      'idade' => 75,
                                      'cpf' => 3), 
                        
                        array ('nome' => 'Nikola',
                                      'sobrenome' => 'Tesla',
                                      'idade' => 20,
                                      'cpf' => 4),  
        
                        array ('nome' => 'Cecília',
                                      'sobrenome' => 'Meireles',
                                      'idade' => 35,
                                      'cpf' => 5)    
        
    );
    
    uasort($usuario, function ($a, $b) {
        return $a['idade'] > $b['idade'];
    });
    print_r($usuario);
        
?>
    
    