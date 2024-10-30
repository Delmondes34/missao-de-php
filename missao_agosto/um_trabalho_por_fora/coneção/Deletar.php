<?php

require_once 'Conectar.php';

if(isset($_GET['deletar'])){

    $id = mysqli_real_escape_string($conectari, $_GET['id']);

    $sql ="DELETE  FROM aniversariante WHERE id = '$id'";


    if(mysqli_query($conectari , $sql)){
        header('Location: ../index.php?sucesso');
    }else{
        header('Location: ../index.php?erro');
    }
}
?>