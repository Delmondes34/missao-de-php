<?php 

    //conectar
    $comoAcerBanco = "local host";
    $nomeDoBanco="aniversario";
    $usuario="root";
    $senha="";

    $conectar = new mysqli($comoAcerBanco, $nomeDoBanco, $usuario, $senha,);

    if($conectar -> connect_errno){
        echo "deu errado:(" . $conectar->connect_errno.")".$conectar->connect_errno;
    }
    else{
        echo "";

    }
?>