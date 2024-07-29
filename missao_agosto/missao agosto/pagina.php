<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>
</head>
<body>
    
    <table class="table table-hover table-bordered">
        <thead>
            <tr>

                <td>Nome da historia</td>
                <td>Genero</td>
                <td>Historia</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <main>
                <?php 
        
                $n = $_GET["nome"];
                $g = $_GET["genero"];
                $h = $_GET["historia"];        
                echo"<td> $n </td> <td> $g </td> <td> $h </td> " ;
            ?>
            </main>
            <td>
            <a href="alteracao.php"><button>altera </button></a>
            <a><button>excluir</button></a>
            </td>
        </tbody>
    </table>
<a href="index.html"><button>escrever outra historia</button></a>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></Script>
</body>
</html>