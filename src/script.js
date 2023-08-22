document.querySelector('.burger').addEventListener('click', function() {
    this.classList.toggle('active'); // "active" do botão de hambúrguer para ativar a sidebar
    document.querySelector('.menu-container').classList.toggle('active'); // ativando o conteúdo da classe contendo sidebar
  });


  
// Efeito Modo Noturno (DARK MODE) - início //

const header = document.querySelector('html');
const toggle = document.querySelector('.input');

toggle.addEventListener('change', () => {
  if (toggle.checked) {
    header.classList.add('dark');
    localStorage.setItem('modoNoturno', 'ativado');
  } else {
    header.classList.remove('dark');
    localStorage.removeItem('modoNoturno');
  }
});

// Verifica o modo ativo pelo usuário da última vez que entrou
window.addEventListener('load', () => {
  if (localStorage.getItem('modoNoturno') === 'ativado') {
    header.classList.add('dark');
    toggle.checked = true;
  }
});


// Efeito Modo Noturno (DARK MODE) - fim //


// SIMBOLO EYE CLOCK / EYE SHOW (SENHA DO USUÁRIO) - início

const pwShowHide = document.querySelectorAll(".eye-icon");

pwShowHide.forEach(eyeIcon => {
  eyeIcon.addEventListener("click", () => {
    let pwField = eyeIcon.previousElementSibling; // Select the password input field
    
    if (pwField.type === "password") {
      pwField.type = "text";
      eyeIcon.classList.toggle("bx-hide");
      eyeIcon.classList.toggle("bx-show");
    } else {
      pwField.type = "password";
      eyeIcon.classList.toggle("bx-show");
      eyeIcon.classList.toggle("bx-hide");
    }
  });
});

// SIMBOLO EYE CLOCK / EYE SHOW (SENHA DO USUÁRIO) - fim


document.addEventListener("DOMContentLoaded", function() {
  // Captura o botão de envio pelo seu ID
  var sendButton = document.getElementById("send-button");
  
  // Adiciona um ouvinte de evento para o clique no botão de envio
  sendButton.addEventListener("click", function(event) {
    event.preventDefault(); // Previne o comportamento padrão do link
    
    // Captura o valor da opção selecionada
    var selectedOption = document.querySelector('input[name="option"]:checked').value;
    
    // Redireciona o usuário com base na opção selecionada
    if (selectedOption === "email") {
      window.location.href = "mail.html"; // Redireciona para mail.html
    } else if (selectedOption === "sms") {
      window.location.href = "sms.html"; // Redireciona para tel.html
    }
  });
});

document.addEventListener("DOMContentLoaded", function() {
  var inputs = document.querySelectorAll(".input-fields input"); // Seleciona todos os campos de entrada
  for (var i = 0; i < inputs.length; i++) {
    inputs[i].addEventListener("input", function() {
      this.value = this.value.replace(/\D/g, ''); // Remove caracteres não numéricos
      if (this.value.length === this.maxLength) {
        // Se o campo atingir o comprimento máximo, encontra o próximo campo
        var nextInput = this.nextElementSibling;
        if (nextInput !== null) {
          nextInput.focus(); // Move o foco para o próximo campo
        }
      } else if (this.value.length === 0) {
        // Se o campo estiver vazio, encontra o campo anterior
        var previousInput = this.previousElementSibling;
        if (previousInput !== null) {
          previousInput.focus(); // Move o foco para o campo anterior
        }
      }
    });
  }
});