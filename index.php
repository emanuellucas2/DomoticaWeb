<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LLJ Domótica - Leitura Elétrica</title>
  <!-- Fonte -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
  <!-- Estilos -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <!-- Scripts (jQuery não pode ser o slim que vem do Boostrap) -->
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>
  <!-- Progress Bar -->
  <script src="js/progressbar.min.js"></script>
  <!-- Parallax -->
  <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
</head>
<body>
  <header>
    <div class="container" id="nav-container">
      <!-- add essa class -->
      <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <a class="navbar-brand" href="index.html">
          <img id="logo" src="img/logoempresa.png" alt="LLJ Domótica: Leitura Elétrica"> LLJ Domótica: Leitura Elétrica
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
          <div class="navbar-nav">
            <a class="nav-item nav-link" id="home-menu" href="#">Home</span></a>
            <a class="nav-item nav-link" id="about-menu" href="#">A empresa</a>
            <a class="nav-item nav-link" id="team-menu" href="#">Equipe</a>
            <a class="nav-item nav-link" id="portfolio-menu" href="#">Login</a>
            <a class="nav-item nav-link" id="contact-menu" href="#">Contato</a>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <main>
    <div class="container-fluid">
      <!-- slider -->
      
      <div id="mainSlider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
          <li data-target="#mainSlider" data-slide-to="1"></li>
          <li data-target="#mainSlider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/banner1.png" class="d-block w-100" alt="Projetos de e-commerce">

            <!-- tirar classe d-none -->

            <div class="carousel-caption d-md-block">
              <h2>Quer diminuir sua conta de luz?</h5>
              <p>Conte conosco, podemos identificar as maiores fontes de consumo elétrico da sua residência.</p>
              <a  id="about-menu" href="#" class="main-btn nav-item">Saiba mais</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/banner2.png" class="d-block w-100" alt="Engenharia de software">
            <div class="carousel-caption d-md-block">
              <h2>Está com alguma dúvida sobre nossos serviços?</h5>
              <p>Nossa equipe está disponível agora para conversar com você.</p>
              <a id="contact-menu" href="#" class="main-btn nav-item">Entre em contato</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/placa1.png" class="d-block w-100" alt="Manutenção em software">
            <div class="carousel-caption d-md-block">
              <h2>Já tem o produto?</h5>
              <p>Faça login e confira o consumo elétrico de cada eletrodoméstico.</p>
              <a id="portfolio-menu" href="#" class="main-btn nav-item">Login</a>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#mainSlider" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#mainSlider" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- Sobre a empresa -->
      <div id="about-area">
        <div class="container">
            <div class="row">
              <div class="col-12"> 
                <h3 class="main-title">Sobre a LLJ Domótica</h3>
              </div>
              <div class="col-md-6">
                <img class="img-fluid" src="img/ufsc-blumenau.jpg" alt="Agência hDC">
              </div>
              <div class="col-md-6">
                <h3 class="about-title">Uma empresa que pensa no futuro</h3>
                <p>Nasceu da Universidade Federal de Santa Catarina.</p>
                <p>Costuma ser difícil identificar as principais fontes de consumo e por isso é interessante ter uma leitura individualizada por eletrodoméstico.</p>
                <p>Nosso sistema lerá os sinais de tensão e corrente dos principais dispositivos elétricos da sua casa e fará o cálculo do gasto. </p>
                <p>Então basta adquirir nosso produto e fazer o login nesse mesmo site e poderá acompanhar o consumo.</p>
                <p>Veja outros diferenciais:</p>
                <ul id="about-list">
                  <li><i class="fas fa-check"></i> Cálculo dos diferentes tipos de potência</li>
                  <li><i class="fas fa-check"></i> Layout simples e de fácil entendimento</li>
                  <li><i class="fas fa-check"></i> Integração com diversos sistemas do mercado</li>
                  <li><i class="fas fa-check"></i> Sistema de pagamento próprio</li>
                </ul>
              </div>
            </div>
          </div>
      </div>
      <!-- Serviços da empresa -->
      
      
      <!-- Dados da empresa -->
      <div id="data-area">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-xs-6 circle-box">
              <div id="circleA"></div>
              <p>Projetos entregues</p>
            </div>
            <div class="col-md-3 col-xs-6 circle-box">
              <div id="circleB"></div>
              <p>Clientes Felizes</p>
            </div>
            <div class="col-md-3 col-xs-6 circle-box">
              <div id="circleC"></div>
              <p>Colaboradores</p>
            </div>  
            <div class="col-md-3 col-xs-6 circle-box">
              <div id="circleD"></div>
              <p>Parceiros</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Time -->
      <div id="team-area">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h3 class="main-title">Nossa Equipe</h3>
            </div>
            <div class="d-flex justify-content-center">
            <div class="col-md-3">
              <div class="card">
                <img src="img/nazareth.jpeg" class="card-img-top" alt="Imagem de Perfil 1" height="400">
                <div class="card-body">
                  <h5 class="card-title">Lucas Nazareth</h5>
                  <p class="card-text">Chefe</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <img src="img/emanuel.jpeg" class="card-img-top" alt="Imagem de Perfil 2" height="400">
                <div class="card-body">
                  <h5 class="card-title">Emanuel Lucas</h5>
                  <p class="card-text">Desenvolvedor</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <img src="img/jefferson.jpeg" class="card-img-top" alt="Imagem de Perfil 3" height="400">
                <div class="card-body">
                  <h5 class="card-title">Jefferson Dantas</h5>
                  <p class="card-text">Desenvolvedor</p>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
      <!-- Trabalhe conosco -->

      
      <!-- Portfólio -->
      <div id="portfolio-area">
        <div class="container">
          <div class="col-md-12">
            <h3 class="main-title">Login</h3>
          </div>
          <form id="form_login" action="login.php" method="POST">
                <center>
                <?php if(isset($resultado) && $resultado["cod"] == 0):?>
                  <div class="alert alert-danger">
                      <?php echo $resultado["msg"]; ?>
                  </div>
                  <?php endif;?>
                <input type="email" id="email" name="email" placeholder="Email">
                <br>
                <br>
                <input type="password" id="senha" name="senha" placeholder="Senha">
                <br>
                <br>
                <button type="submit" class="main-btn" id="submeter">Login</button>
                </center>
          </form>
        </div>
      </div>
      <!-- Newsletter -->
      <div id="news-area">
        <div class="container">
          <div class="col-md-12">
            <h3 class="main-title">Fique por dentro das novidades</h3>
          </div>
          <p>Assine nossa lista de e-mails e receba notícias de novos projetos desenvolvidos</p>
          <form action="">
            <input type="text" class="form-control" id="email-input" name="email" placeholder="Seu melhor e-mail">
            <input type="submit" id="news-btn" value="Inscrever">
          </form>
        </div>
      </div>
      <!-- Call to Action -->

  <!-- Rodapé -->
  <footer>
    <div id="contact-area">
      <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h3 class="main-title">Entre em contato conosco</h3>
            </div>
            <div class="col-md-4 contact-box">
              <i class="fas fa-phone"></i>
              <p><span class="contact-tile">Ligue para:</span> (47)99162-2079</p>
              <p><span class="contact-tile">Horários:</span> 8:00 - 19:00</p>
            </div>
            <div class="col-md-4 contact-box">
              <i class="fas fa-envelope"></i>
              <p><span class="contact-tile">Envie um email:</span> contato@ljjdomotica.com.br</p>
            </div>
            <div class="col-md-4 contact-box">
              <i class="fas fa-map-marker-alt"></i>
              <p><span class="contact-tile">Venha tomar um café:</span> Rua João Pessoa - 1900</p>
            </div>
            <div class="col-md-6" id="msg-box">
              <p>Ou nos deixe uma mensagem:</p>
            </div>
            <div class="col-md-6" id="contact-form">
              <form action="">
                <input type="text" class="form-control" placeholder="E-mail" name="email">
                <input type="text" class="form-control" placeholder="Assunto" name="subject">
                <textarea class="form-control" rows="3" placeholder="Sua mensagem..." name="message"></textarea>
                <input type="submit" class="main-btn">
              </form>
            </div>
          </div>
      </div>
    </div>
    <div id="copy-area">
      <div class="container">
        <div class="row">
            <div class="col-md-12">
              <p>Desenvolvido através da <a href="https://www.horadecodar.com.br" target="_blank">hDC Agency</a> &copy; 2021</p>
            </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Scripts do projeto -->
  <script src="js/scripts.js"></script>
</body>
</html>