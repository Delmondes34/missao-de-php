<?php
 include_once 'pasta_para_conectar/Acao_conect.php';
 ?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../estilo/estilo.css">
</head>
<body>
    <div>
        <h1>Bem vindo a Escrivaninha</h1>
        <h4>Seu melhor editor de historia</h4>
    </div>
    <h4> Aqui esta alguma de nossas historias</h4>
    <p> Elas seram incluidas na tabela abaixo </p>
    <table class="table table-hover table-bordered">
        <thead>
            <tr >
                <td>Nome da historia</td>
                <td>Genero</td>
                <td>Sinopse</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php 
                    $sql = 'SELECT * FROM historias';
                    $result = mysqli_query($conectar , $sql);
                    while($dados = mysqli_fetch_array($result)):
                ?>
                <td><?php echo $dados['nome_da_historia'];?></td>
                <td><?php echo $dados['genero'];?></td>
                <td><?php echo $dados['historia'];?></td>
                <td>
                    <a href="Escritor.php"><button>altera </button></a>
                    <a><button>excluir</button></a>
                </td>
            </tr>
            <?php endwhile; ?>    
        </tbody>
    </table>
    <p>escreva as suas historias ao clicar nesse botão nesse botão</p>
    
    <a href="Escritor.php" class="form-label"><button>escrever outra historia</button></a>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>