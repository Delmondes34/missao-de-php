<?php 

    require_once 'Conectar.php';

    if(isset($_POST['novo_mili'])){
             
        $grad = mysqli_escape_string($conectari, $_POST['graduacao']);
        
        $nome = mysqli_escape_string($conectari, $_POST['nome']);
        
        $nomeGuera = mysqli_escape_string($conectari, $_POST['nome_de_guerra']);     
        
        $aniver = mysqli_escape_string($conectari, $_POST['data_de_aniversario']);

        $sql = "INSERT INTO aniversariante(graduacao, nome, nome_de_guerra,  data_de_aniversario) VALUES ('$grad', '$nome', '$nomeGuera',  '$aniver')";


        if(mysqli_query($conectari , $sql)){
            header('Location: ../index.php?sucesso');
        }else{
            header('Location: ../index.php?erro');
        }
    }
?>