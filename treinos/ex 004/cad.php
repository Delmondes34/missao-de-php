<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>reseultado</title>
    <link rel="stylesheet" href="../estiolo/style.css">
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php 
        $n = $_GET["nome"];
        $s = $_GET["sobrenome"];
        echo"<p> E um prazer te conhecer, $n $s! este e seu saite ";
        ?>
    </main>
</body>
</html>