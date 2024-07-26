<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>
    <link rel="stylesheet" href="back/back.js"/>
    <link rel="stylesheet" href="estilo/estilo.css"/>
    <title>missao</title>
</head>
<body>

    <div class="geral">
    <?php 

    ?>
    <div>
        <h1>Bem vindo a Radação</h1>
        <h4>seu melhor editor de historia</h4>
    </div>
    <form class="row g-3 needs-validation" novalidate>
    <div class="col-md-4">
        <label for="validationCustom01" class="form-label" id="nomeDaHistoria" required>Digite o nome da historia</label>
        <input type="text" require class="form-control" id="validationCustom01"  aria-describedby="emailHelp">
        <div>
            <label for="">Digite o genero</label>
            <select name="genero" id="" class="form-select" aria-label="Default select" id="genero" required> 
                <option value="1">Ação</option>
                <option value="2">Comedia</option>
                <option value="3">Romance</option>
                <option value="4">Terro</option>
                <option value="5">Drama</option>
                <option value="6">Ficção</option>
            </select>
        </div>
    </div>
    <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" required> Comece a digitar a sua historia</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" id="historia" require></textarea>
        </div>
    
    </div>
    <a href="pagina.php"><button type="button" class="btn btn-success">confirma</button></a>
    </div>
    </form>


    
    <script href="back/back.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></Script>
</body>
</html>
