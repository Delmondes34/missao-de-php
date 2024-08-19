<?php

require_once 'conexao.php';

if(isset($_GET['deletar'])){

    $id = mysqli_real_escape_string($conectar, $_GET['id']);

    $sql ="DELETE  FROM historias WHERE id = '$id'";


    if(mysqli_query($conectar , $sql)){
        header('Location: ../index.php?sucesso');
    }else{
        header('Location: ../index.php?erro');
    }
}
?>