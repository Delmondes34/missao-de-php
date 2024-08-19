<?php 

    $localDeAcesso = "localhost";
    $bancoDeDados="crud";
    $usuario = "root";
    $senha= "";

    $conectar = new mysqli($localDeAcesso, $usuario, $senha, $bancoDeDados,);

    if($conectar -> connect_errno){
        echo "deu errado:(" . $conectar->connect_errno.")".$conectar->connect_errno;
    }
    else{
        echo "";
    }
?>
