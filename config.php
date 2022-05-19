<?php

    $dbHost = 'Localhost';
    $dbUsername= 'root';
    $dbPassword = 'Meu#banco431';
    $dbName = 'formulario-gustavo';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

   /* if($conexao->connect_errno)
   {
        echo "Erro";
   }
    else {
        echo "Conexão efetuada com sucesso";
    }
*/

?>
