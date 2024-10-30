<?php 

    //conectar
    $comoAcerBanco = "localhost";
    $nomeDoBanco="aniversario";
    $usuario="root";
    $senha="";

    $conectari = new mysqli($comoAcerBanco, $usuario, $senha, $nomeDoBanco);

    if($conectari -> connect_errno){
        echo "deu errado:(" . $conectari->connect_errno.")".$conectari->connect_errno;
    }
    else{
        echo "";
    }

?>