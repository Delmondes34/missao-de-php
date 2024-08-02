<?php 
require_once 'coneção.php'

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>
</head>
<body>
    <div>
        <h1>Bem vindo a Redação</h1>
        <h4>seu melhor editor de historia</h4>
    </div>
    <section>
    <form action="pagina.php" method="get" >
        <div class="col-md-4">
            <div>
                <label for="validationCustom01" class="form-label">Digite o nome da historia</label>
                <input type="text" require class="form-control" id="validationCustom01"  aria-describedby="emailHelp" name="nome_da_historia" required>
            </div>
            <div>
                <label for="">Digite o genero</label>
                <select name="genero"  class="form-select" aria-label="Default select" id="genero" required>
                        <option value=""></option>
                        <option value="Ação">Ação</option>
                        <option value="Comedia">Comedia</option>
                        <option value="Romance">Romance</option>
                        <option value="Terro">Terro</option>
                        <option value="Drama">Drama</option>
                        <option value="Ficção">Ficção</option>
                    </select>
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label"> Comece a digitar a sua historia</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="historia" required></textarea>
        </div>
                    <a href="pagina.php"><button onclick="confirmar(); return false" class="btn btn-success form-control">confirmar</button> </a>
            </div>        
        </form> 
     
       
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></Script>
</body>
</html>