<DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="conexão.php"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo/estilo.css">
    <link href="pasta_para_conectar/conexão.php">
    <link href="pasta_para_conectar/Acao_conect.php">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>       
</head>
<body> 
    <div class="universal">
        <section class="universal">
            
        <form action="pasta_para_conectar/Acao_conect.php" method="POST" >'
        <div class="caixa">
            <div class="conteudoCaixa" id="caixaEscrever">
                <div class="local">
                    <h1>Escreva</h1>
                    <label for="nome_da_historia" class="escrita" class="form-label" >Digite o nome da historia</label>
                    <input type="text" require class="form-control" id="nome_da_historia"  aria-describedby="emailHelp" name="nome_da_historia" class="estilo" required>
         
            </div>
            <div class="local">
                <label for="genero" class="escrita">Digite o genero</label>
                <select name="id_genero" class="form-select" aria-label="Default select" id="id_genero"  required>
                        <option value="0" selected></option>
                        <?php
                        Include 'pasta_para_conectar/conexao.php';
                        $consultar=mysqli_query($conectar, "Select * FROM generos ");
                        while($generos = mysqli_fetch_object($consultar)):      
                            echo"<option value='$generos->id_genero'> $generos->genero</option>";
                        endwhile
                                                  
                     ?>
                    </select>
            </div>
            <div class="mb-3" class="local">
                <label for="historia" class="escrita" > Comece a digitar a sua sinopse</label>
                <textarea class="form-control" id="historia" rows="4" name="historia" class="estilo" required></textarea>
            </div>
            <div>
                <Button type="submit" name="novaHist" href="index.php" class="btn btn-primary" id="bot">confirmar</Button>
                
            </div>        
            </form>
            <a href="index.php" class="btn btn-dark" id="bot" >voltar</a>
        </div>
          
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></Script>
</body>
</html>
