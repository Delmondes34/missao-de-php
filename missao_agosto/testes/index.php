<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

setlocale(LC_TIME, 'portuguese'); 
date_default_timezone_set('America/Sao_Paulo');

$date = date('Y-m-d');
echo strftime("%d de %B de %Y", strtotime($date));
?>
<br>

<select name="id_genero" class="form-select" id="id_genero" required>    
<?php 
    $consultar = mysqli_query($conectar, "SELECT * FROM generos");
    echo "<option value='0'></option>";
    while ($generos = mysqli_fetch_object($consultar)) :
        $isSelected = $generos->id_generos == $dados['id_genero'] ? "selected" : "";
        echo "<option value='$generos->id_generos' $isSelected>$generos->genero</option>"; 
    endwhile;
?>
</select>


<a href="teste.html"> fff</a>
    
</body>
</html>