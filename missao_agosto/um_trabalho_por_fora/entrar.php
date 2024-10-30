
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>  
    <link rel="stylesheet" href="estilo/estilo de tudo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="coneção/Conccao.php">
</head>
<body class="corpo1">
    
   <h1 class="escrita1" class="display-2">Cadastrar</h1>
    <div class="box1">
        <div class="conteudo1" >
            <form action="coneção/conccao.php" method="post">

                <label for="nome" class="nome" >Nome<label>
                <input type="text" name="nome" required="required" id="nome" class="form-control" id="exampleFormControlInput1">  

                <label for="nomeGuerra" class="nome_de_guerra" >Nome de Guerra<label>
                <input type="text" name="nome_de_guerra" required="required" id="nome_de_guerra"
                class="form-control" id="exampleFormControlInput1">     
                <label for="graduacao" >Posto e Gradução</label>
                <select name="graduacao" required="required" class="form-select" id="graduacao" >
                    <option value=""></option>
                    <option value="Sd Ev">Sd Ev</option>
                    <option value="Sd Ep">Sd Ep</option>
                    <option value="Cb">Cb</option>
                    <option value="Sgt">Sgt</option>
                    <option value="Sub">Sub</option>
                    <option value="Ten">Ten</option>
                    <option value="Cap">Cap</option>
                    <option value="Maj">Maj</option>
                    <option value="Ten Cel">Ten Cel</option>
                    <option value="Cel">Cel</option>
                </select>
                    <label for="data_de_aniversario">Digite seu aniversario</label>
                    <input type="date" class="form-control" name="data_de_aniversario" required="required" min="1950" max="2030" id="data_de_aniversario">
                <br/>

                    <a href="index.php">
                        <Button type="submit" name="novo_mili"  class="btn btn-primary" id="bot">confirmar</Button>
                    </a>
            </form>
            <a href="index.php" class="btn btn-dark" id="bot" >voltar</a>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>