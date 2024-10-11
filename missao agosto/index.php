<?php
    Include 'pasta_para_conectar/conexao.php';
 ?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>
    <link href="../estilo/estilo.css">
    <link rel="stylesheet" href="estilo/estiloDoSite.css">
</head>
<body>
    <div class="universal">
        <div>
            <h1>Bem vindo ao POST</h1>
            <h5>Seu melhor expositor de historias</h4>
        </div>
        <h5> Aqui esta alguma de nossas historias</h4>
        <p>escreva as descrições das novas historias ao clicar nesse botão nesse botão</p>
        <table class="table table-success table-striped table-bordered">
            <thead>
                <tr>
                    <td>Nome da historia</td>
                    <td>Genero</td>
                    <td>Sinopse</td>
                    <td>
                        <a href="Escritor.php" class="form-label">
                        <button class="btn btn-info">nova historia</button>
                        </a>
                    </td>
                </tr>
            </thead>
            <tbody >
                <tr>
                    <?php 
                        $sql = 'SELECT historias.id, historias.nome_da_historia, generos.genero, historias.historia from historias INNER JOIN generos ON historias.id_genero=generos.id_genero ';
                        $result = mysqli_query($conectar , $sql);
                        while($dados = mysqli_fetch_array($result)):                            
                    ?>
                    <td><?php echo $dados['nome_da_historia'];?></td>
                    <td><?php echo $dados['genero'];?></td>
                    <td><?php echo $dados['historia'];?></td>
                    <td>
                    <a href="Editar.php?id=<?php echo $dados['id'];?>" class="btn btn-primary" href='#'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                        <path d='M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z'/>
                        </svg>
                    </a>
                    <br><br>
                    <button class="btn btn-danger" type="button" name="delete" data-bs-toggle="modal" data-bs-target="#deletarOuNao<?php echo $dados['id'];?>"> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0'/>
                        </svg> 
                    </button>
                        <div class="modal fade" id="deletarOuNao<?php echo $dados['id'];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel"> Deletar ou não deletar eis a questão</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    Você realmente quer deletar esse historia do nosso catalogo
                                    </div>
                                    <div class="modal-footer">
                                        
                                        <form action="pasta_para_conectar/Deletar.php" method="get">
                                            <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
                                            <button type="submit" name="deletar" class="btn btn-primary" >
                                                Deletar
                                            </button>
                                            
                                    </form>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php endwhile; ?>    
            </tbody>
        </table></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <script>

        const myModal = document.getElementById('myModal')
        const myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', () => {
        myInput.focus()
        })
    </script>
</body>
</html>