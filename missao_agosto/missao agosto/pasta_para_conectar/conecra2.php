<?php

    $localDeAcesso = 'localhost';
    $bancoDeDados='crud';
    $usuario = 'root';
    $senha= '';

    try{
        $conet = new PDO("mysql: localDeAcesso = $localDeAcesso, bancoDeDados = $bancoDeDados, $usuario, $senha ");
        $conet->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conet->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }catch(Exception $e){
        echo $e->getMessage();
        exit;
    }

?>