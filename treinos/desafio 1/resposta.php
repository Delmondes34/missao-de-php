<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../estiolo/style.css">
</head>
<body>

    <section>
    <?php

    $n = $_GET["nome"];
    $a = $n - 1;
    $p = $n + 1;
    echo "<p>o seu numero e $n o seu antercerssor $a e o psoterior e $p</p>";
    ?>
    </section>


</body>
</html>