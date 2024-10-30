<?php 
  include_once 'coneção/Conccao.php"' ; 
  if(isset($_GET['id'])){
    $id = mysqli_escape_string($conectari, $_GET['id']);
    $sql ="SELECT * From aniversariante WHERE id = '$id'" ;
    $result = mysqli_query($conectari , $sql);
    $dados = mysqli_fetch_array($result);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../um_trabalho_por_fora/estilo/estilo de tudo.css">
    <link href="../um_trabalho_por_fora/coneção/conccao.php">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    

</head>
<body class="corpo">
          <div class="conteiner">
            <div id="calendarContainer" class="calendar">
              <h1> Ano de 2024</h1>
              <h3>Mês de Julho</h2>
                <table>
                  <thead>
                    <tr>
                      <th>Domingo</th>
                      <th>Segunda</th>
                      <th>Terça</th>
                      <th>Quarta</th>
                      <th>Quinta</th>
                      <th>Sexta</th>
                      <th>Sábado</th>
                    </tr>
                  </thead>
                  <tbody id="calendarBody">
                    <!-- O conteúdo da tabela será preenchido dinamicamente com JavaScript -->
                  </tbody>
                </table>
                <br>
              </div>
         </div>
<script>
  // Função para preencher o calendário com os dias do mês
  function fillCalendar() {
    const today = new Date();
    const year = today.getFullYear();
    const month = today.getMonth();
    const firstDayOfMonth = new Date(year, month, 1);
    const lastDayOfMonth = new Date(year, month + 1, 0);
    const daysInMonth = lastDayOfMonth.getDate();
    const startDayOfWeek = firstDayOfMonth.getDay();

    const calendarBody = document.getElementById('calendarBody');
    calendarBody.innerHTML = '';

    let date = 1;
    for (let i = 0; i < 6; i++) { // 6 weeks to cover all possible month layouts
      const row = document.createElement('tr');
      for (let j = 0; j < 7; j++) { // 7 days in a week
        if ((i === 0 && j < startDayOfWeek) || date > daysInMonth) {
          row.innerHTML += '<td></td>';
        } else {
          const cell = document.createElement('td');
          cell.textContent = date;
          if (date === today.getDate() && year === today.getFullYear() && month === today.getMonth()) {
            cell.classList.add('today');
          }
          row.appendChild(cell);
          date++;
        }
      }
      calendarBody.appendChild(row);
      if (date > daysInMonth) {
        break;
      }
    }
  }

  // Chamada inicial para preencher o calendário ao carregar a página
  fillCalendar();
</script>
   <?php // innicio da tablea de aniversariasmtes//
    
    ?>
     <div class="local">
        <div class="corpot">
            <h1> Lista de Aniversariantes</h1>

            <a href="entrar.php" class="btn btn-dark">Novo Aniversariante</a>
            <p></p>
            <div class="rolagen">
              <table class="lista">
                  <thead>
                      <tr>                  
                          <th class="pg">
                            Posto e Graduação
                          </th>
                          <th class="milico">
                            Nome de Guerra
                          </th>
                          <th class="milico">
                            Militar
                          </th >                          
                          <th class="ani">
                            Data de Aniversario
                          </th>
                      </tr>
                  </thead>
                  <tbody>
                        <?php  
                          $sql = 'SELECT * FROM aniversariante
                                  ORDER BY MONTH(data_de_aniversario)';
                          $result = mysqli_query($conectari , $sql);
                          while($dados = mysqli_fetch_array($result)):              
                        ?>
                      <tr class="pe">

                        <td class="pe"><?php echo $dados['graduacao'];?></td>
                        <td class="pe"><?php echo $dados['nome_de_guerra']?></td>
                        <td class="pe"><?php echo $dados['nome']?></td>                        
                        <td class="pe"><?php                                       
                                          setlocale(LC_TIME,'pt_BR.UTF-8');
                                          $dataBR = strftime('%d/%m', strtotime($dados['data_de_aniversario']));
                                          echo $dataBR;
                                        ?>
                        </td>
                        <td>
                          <button class="btn btn-danger" type="button" name="delete" data-bs-toggle="modal" data-bs-target="#deletarOuNao<?php echo $dados['id'];?>"> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0'/>
                            </svg> 
                          </button>  
                          <div class="modal fade" id="deletarOuNao<?php echo $dados['id'];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h1 class="modal-title fs-5" id="staticBackdropLabel"> Deletar Militar</h1>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                      Você realmente quer deletar esse Militar
                                      </div>
                                      <div class="modal-footer">
                                          
                                          <form action="coneção/Deletar.php" method="get">
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
                  <?php endwhile;?>
                  </tbody>
              </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>