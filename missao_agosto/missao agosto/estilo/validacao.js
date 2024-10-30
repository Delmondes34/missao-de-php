//validação feita por mim
function confirmar(){
            
    var nome = document.getElementById("nome").value;
    var genero = document.getElementById("genero").value;
    var historia = document.getElementById("historia").value;

    if(nome == "" && genero == "" && historia == ""){
        alert('acesso invalido')
        
    }else{
        alert('acesso valido')
        location.href="../missao agosto/pagina.php"
    }
};

//validação do boostrep
// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
  
        form.classList.add('was-validated')
      }, false)
    })
  })()


