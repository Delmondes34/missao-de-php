<?php 
    include_once 'pasta_para_conectar/Atualizar.php';
    
    if(isset($_GET['id'])){
        $id = mysqli_escape_string($conectar, $_GET['id']);
        $sql ="SELECT * From historias WHERE id = '$id'";
        $result = mysqli_query($conectar , $sql);
        $dados = mysqli_fetch_array($result);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="conexão.php"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>
    <link href="pasta_para_conectar/conexão.php">
    <link href="pasta_para_conectar/Acao_conect.php">
</head>
<body class="corpo">
<link href="../estilo/estilo.css">
    
    <div class="universal">
        <section class="usniversal">
       
            
        <form action="pasta_para_conectar/Atualizar.php" method="POST" >
        <div class="caixa">    
            <div class="conteudoCaixa">
                <div >    
                    <h1>Escreva</h1>
                    <input type="hidden" name="id" id="nome" value="<?php echo $dados['id'];?>">
                </div>
                <div class="col-md-4">
                    <div class="localNome">
                        <label for="nome_da_historia" class="form-label">Digite o nome da historia</label>
                        <input type="text" class="form-control" id="nome_da_historia" aria-describedby="emailHelp" name="nome_da_historia" value="<?php echo $dados['nome_da_historia'];?>" require>
                    </div>
                    <div class="local">
                        <label for="genero">Digite o genero</label>
                        <select name="id_genero" class="form-select" aria-label="Default select" id="id_genero" required>    
                            <?php
                                $consultar = mysqli_query($conectar, "Select * FROM generos");
                                echo"<option value='0' selected></option>";
                                while ($generos = mysqli_fetch_object($consultar)) :
                                    $isSelected = $generos->id_genero == $dados['id_genero'] ? "selected" : "";                     
                                    echo"<option value = '$generos->id_generos'$isSelected > $generos->genero </option>";
                                endwhile;
                                
                               $consultar=mysqli_query($conectar, "Select * FROM generos ");
                                while($generos = mysqli_fetch_object($consultar)):      
                                echo"<option value='$generos->id_genero'> $generos->genero</option>";
                               
                                endwhile
                             ?>
                        </select>
                    </div>
                </div>
                <div class="local">

                    <label for="historia" class="form-label"> Comece a digitar a Sinopse</label>
                    <textarea class="form-control" id="historia" rows="4" name="historia" value="<?php echo $dados['historia'];?>"required><?php echo $dados['historia'];?></textarea>
                </div>
                    <br>  
                    <Button type="submit" name="atualHist" herf="index.php" class="btn btn-primary" id="bot">Atualizar</Button>
                    <a href="index.php" class="btn btn-dark" id="bot">voltar</a> 
                </div>    
                </form>
                
                
        </div>        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></Script>

</body>
</html>
