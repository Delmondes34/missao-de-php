<?php

require_once 'conexao.php';

if(isset($_POST['Deletar.php'])){

    $id = mysqli_escape_string($conectar, $_POST['id']);

    $sql = "DELETE FROM historias WHERE id='$id'";

    if(mysqli_query($conectar , $sql)){
        echo "sucesso";
        header('Location: ../pasta_para_conectar/index.php?sucesso');
    }else{
        header('Location: index.php?erro');
    }

}
?>