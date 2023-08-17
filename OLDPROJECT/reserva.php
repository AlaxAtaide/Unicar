<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" href="icon/icone.png"/>
    <link rel="stylesheet" href="src/rsv-style.css"  />
    
    <link rel="stylesheet" href="src/global.css" />
    
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
   
    <link
      href="https://fonts.googleapis.com/css2?family=Smooch+Sans:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <title>UNICAR</title>
  </head>

  <body>
    <header class="container">
      <div class="logo">
        <h2>UniCar</h2>
      </div>
      
      <div class="menu-icon" onclick="abrirMenu()">
        <img src="src/images/hamburguer.png"> 
      </div>

      <div class="menu">
        <nav>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="reserva.php">Reservar vaga</a></li>
            <li><a href="Equipe.html">Conheça nosso TIME</a></li>
            <li><a href="cadastro.html">Cadastre-se</a></li>
            <li><a href="login.html">Login</a></li>
          </ul>
        </nav>
        <script>
          var menu = document.querySelector('.menu ul');
          var menuIcon = document.querySelector('.menu-icon');

          function abrirMenu(){
            menu.classList.toggle('open');
          }
        </script>
      </div>
    </header>
    <main>
      <div class="banner-1">
        <p>
          Não quer mais ter dor<br />
          de cabeça na hora do estacionamento?<br />
          Contrate nossos serviços!<br />
        </p>
        <img
          src="src/images/car2.png" alt=""
        />
      </div>

      <div class="banner-2">
           <h3>Reserve sua vaga!</h3>
          <p>
          Preencha os campos abaixo:
          </p>
       
          <form class="reserva" method="POST" action="">
            <label for="data">Data/Hora</label><br />

            <input class="data" name="data" type="datetime-local" />
            <br /><br/>
      
            
            <label for="local">Local do Estacionamento</label><br />
            <select id="local" autofocus="true">
              <option value="1">Uniceplac</option>
              <option value="2">Carrefour</option>
              <option value="3">Americanas</option>
              <option value="4">Casas Bahia</option> 
            </select>
        
          
            <br /><br/>
      
            <input class="button" type="submit" value="Reservar" />

        </div>

        <div class="detalhe">
          <div class="calendar"></div>
        </div>


    </main>
  
    <footer>
      <img src="src/images/LOGO-UNICAR.png" alt="Logo da UNICAR"></img>
      <p class="copyright">&copy; Copyright UNICAR - 2022</p>
    </footer>
  </body>
</html>
>>>>>>> Alax
