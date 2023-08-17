document.querySelector('.burger').addEventListener('click', function() {
    this.classList.toggle('active'); // "active" do botão de hambúrguer para ativar a sidebar
    document.querySelector('.menu-container').classList.toggle('active'); // ativando o conteúdo da classe contendo sidebar
  });