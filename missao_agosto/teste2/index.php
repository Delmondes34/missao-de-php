<?php 
    include_once 'incluid/header.php';
?>


<div class= "row">
    <div class = "col s12 m6 push-me3.php">
    <h3 class="light">Clientes</h3>
    <table class="striped">
        <thead>
            <tr>
                <th>nome</th>
                <th>sobrenome</th>
                <th>email</th>
                <th>idade</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>rodrigo</td>
                <td>oliveira</td>
                <td>rodrigosantosweb@gmail.com</td>
                <td>25</td>
                <td><a href=""class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                <td><a href=""class="btn-floating blue"><i class="material-icons">delete</i></a></td>
            </tr>
        </tbody>
    </table>
    <br>
    <a href="adicionar.php" class="btn">Adicionar cliente</a>
    </div>

<?php 
    include_once 'incluid/footer.php';
?>