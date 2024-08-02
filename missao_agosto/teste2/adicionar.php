<?php 
    include_once 'incluid/header.php';
?>


<div class= "row">
    <div class = "col s12 m6 push-me3.php">
        <h3 class="light">Novo cliente</h3>
        <form action="">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome">
                <label for="nome">Nome</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="sobrenome" id="sobrenome">
                <label for="sobrenome">Sobrenome</label>
            </div>    
            <div class="input-field col s12">
                <input type="text" name="email" id="email">
                <label for="email">Email</label>
            </div> 
            <div class="input-field col s12">
                <input type="text" name="idade" id="idade">
                <label for="idade">Idade</label>
            </div> 
            <button type="submit" name="btn-cadastrar" class="btn">cadastrar</button>
            <a type="submit" class="btn green" href="index.php">lista de clientes</a>
        </form>
    </div>

<?php 
    include_once 'incluid/footer.php';
?>