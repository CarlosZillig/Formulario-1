<?php
    $dbHost = 'LocalHost';
    $dbUsername = 'root';
    $dbPassword = 'bela02/07/2004';
    $dbName = 'formulario';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if($conexao->connect_errno)
    {
        echo "Erro";
    }
    else {
        echo "Conexao efetuada com sucesso"
    }
?>