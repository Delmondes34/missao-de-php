<?php

require_once 'conexao.php';

if(isset($_POST['delete'])){

    $id = mysqli_escape_string($conectar, $_POST['id']);

    $sql ="DELETE historias From id= '$id'";

}





?>