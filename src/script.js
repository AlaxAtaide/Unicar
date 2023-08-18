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