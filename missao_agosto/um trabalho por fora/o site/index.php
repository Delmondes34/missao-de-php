<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../estilo/estilo de tudo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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

     <div class="local">
        <div class="corpot">
            <h1> Aniversariante do mês</h1>
            <table class="lista">
                <thead>
                    <tr>
                        <th class="pg">
                          Posto e graduação
                        </th>
                        <th class="milico">
                          Militar
                        </th >
                        <th class="milico">
                          Nome de Guerra
                        </th>
                        <th class="ani">
                          Data de aniversario
                        </th>
                    </tr>
                    <tr class="pe">
                        <th>2ºTen</th>
                        <th>Daniel Mendonça</th>
                        <th></th>
                        <th>10/01</th>
                    </tr>
                    <tr class="pe">
                      <th>Sd Ep</th>
                      <th>Vinicios Gabriel da Silva Paiva</th>
                      <th></th>
                      <th>30/01 </th>

                    </tr>
                    <tr class="pe">
                        <th>Sd Ev</th>
                        <th>Lucas Vidal Carvalho Costa</th>
                        <th></th>
                        <th>13/03</th>
                    </tr> 
                    <tr class="pe">
                         <th>3ºSgt</th>
                         <th>Rodrigo Pires  Gonçalves</th>
                         <th></th>
                         <th>16/04 </th>  
                    </tr>
                    <tr class="pe">
                        <th>1ºTen</th> 
                        <th>Gabriel Lourenço Meireles</th>
                        <th></th>
                        <th>20/04</th> 
                    </tr>
                    <tr class="pe">
                      <th>3ºSgt</th>
                      <th>Washigton Pinheiro Aroucha</th>
                      <th></th>
                      <th>23/04</th>
                    </tr>
                    <tr class="pe">
                      <th> 2ºTen</th>
                      <th>Bruno Lima Martins</th>
                      <th></th>
                      <th>09/05 </th>
                    </tr>      
                    <tr class="pe">
                      <th>3ºSgt</th>
                      <th>Maria Patricia de Sousa Alencar</th>
                      <th></th>
                      <th>18/05 </th>
                    </tr>  
                    <tr class="pe">
                      <th>3ºSgt</th>
                      <th>Francisco Rodrigues Melo</th>
                      <th></th>
                      <th>23/05 </th>
                    </tr>      
                   <tr class="pe">
                      <th>1ºTen</th>
                      <th>Erick da Silva Santana</th>
                      <th></th>
                      <th>28/05</th>
                    </tr> 
                    <tr class="pe">    
                      <th>Sd Ep</th>
                      <th>Gustavo Herique de Aguiar Delmondes</th>
                      <th></th>
                      <th>28/05</th>
                    </tr>          
                  <tr class="pe">
                    <th>Sd Ev</th>
                    <th>Gustavo Gomes Nogueira</th> 
                    <th></th>
                    <th>17/06</th>
                  </tr>
                  <tr class="pe">       
                    <th>3ºSgt</th>
                    <th>Efrain Huerta Araújo</th>
                    <th></th>
                    <th>07/08 </th>
                  </tr>    
                  <tr class="pe">
                    <th>Sd Ev</th>
                    <th>Antônio Fernando  de Assis Pereira</th>
                    <th></th>
                    <th>23/08 </th>
                  </tr>
                  <tr class="pe">
                    <th>Sd Ev</th>
                    <th>Taisson Luan Pereira de Araújo</th>
                    <th></th>
                    <th>05/09 </th>
                  </tr>
                  <tr class="pe">
                   <th>2ºTen</th>
                   <th>Leohanderson Gabriel Viera Santos</th>
                   <th></th>
                   <th>23/09</th>
                 </tr>
                 <tr class="pe">
                    <th> Sd Ep</th>
                    <th>Lucas Henrique Cordeiro Santiago</th>
                    <th></th>
                    <th>25/09</th>
                  </tr> 
                  <tr class="pe">
                   <th>3ºSgt</th>
                   <th>João Victor Damasceno Manoel</th>
                   <th></th>
                   <th>28/12 </th>
                </tr>
                <tr class="pe">
                  <th>3ºSgt</th>
                  <th>Rafael Anderson de Souza Moreira</th>
                  <th></th>
                  <th>30/12</th>
                 </tr>           
                </thead>
            </table>
            <a href="../entrar.html" class="btn btn-dark">cadastrar</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>