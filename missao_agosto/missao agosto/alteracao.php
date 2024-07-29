<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Oque vc quer codificar</h1>
<section>
    <form action="pagina.php" method="get" >
        <div class="col-md-4">
            <div>
                <label for="validationCustom01" class="form-label">Digite o nome da historia</label>
                <input type="text" require class="form-control" id="validationCustom01"  aria-describedby="emailHelp" name="nome">
            </div>
            <div>
                <label for="">Digite o genero</label>
                <select name="genero" nome="genero" class="form-select" aria-label="Default select" id="genero" required>
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
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="historia"></textarea>
        </div>
        <div>
        <a href="pagina.php"><button>mudar</button></a>
        </div>
        <div>
            <a href="pagina.php"><button>excluir</button></a>
        </div>
    </form>
</section>
</body>
</html>