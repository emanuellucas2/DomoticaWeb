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
            <a class="nav-item nav-link" id="home-menu" href="index.php">Sair</span></a>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <main>
    <div class="container-fluid">

        <br>
        <br>

      <div id="team-area">
        <div class="container">
          <div class="row">
            <div class="col-12">
                <h3 class="main-title">Eletrodomésticos</h3>
            </div>
          </div>
        </div>
      </div>
      <?php foreach($result2["amostras"] as $r): ?>
        
        <?php if(isset($atual[$r["eletro"]]) == NULL):?>
          <?php $atual[$r["eletro"]] = 1;?>
            <div class="col-md-6" id="msg-box">
              <p><?= $r["eletro"];?></p>
            </div>
            <!-- tabela -->
            <table class="table table-hover">
              <thead class="table-dark">
                <tr>
                  <th style='text-align:center;vertical-align:middle'>Horário</th>
                  <th style='text-align:center;vertical-align:middle'>Potência Ativa</th>
                  <th style='text-align:center;vertical-align:middle'>Potência Aparente</th>
                  <th style='text-align:center;vertical-align:middle'>Potência Reativa</th>
                  <th style='text-align:center;vertical-align:middle'>Fator de Potência</th>
                  <th style='text-align:center;vertical-align:middle'>Consumo</th>
                  <th style='text-align:center;vertical-align:middle'>Custo</th>
                </tr>
              </thead>
              <?php $kwh = 0;?>
              <?php $valor = 0;?>
                <?php foreach($result2["amostras"] as $s): ?>
                  <?php if($r["eletro"] == $s["eletro"]):?>
                  <tbody>
                    <tr>
                      <th style='text-align:center;vertical-align:middle'><VAr><?= $s["hora"];?></VAr></th>
                      <td style='text-align:center;vertical-align:middle'><VAr><?= number_format($s["pot_ativa"],5);?></VAr></td>
                      <td style='text-align:center;vertical-align:middle'><VAr><?= number_format($s["pot_aparente"],5);?></VAr></td>
                      <td style='text-align:center;vertical-align:middle'><VAr><?= number_format(sqrt($s["pot_aparente"]*$r["pot_aparente"] - $r["pot_ativa"]*$r["pot_ativa"]), 5);?></VAr></td>
                      <td style='text-align:center;vertical-align:middle'><VAr><?= number_format($s["pot_ativa"]/$r["pot_aparente"],3);?></VAr></td>
                      <td style='text-align:center;vertical-align:middle'><VAr><?= number_format($s["pot_ativa"]*$s["micro"]/3600,5);?></VAr></td>
                      <td style='text-align:center;vertical-align:middle'><VAr><?= number_format($s["pot_ativa"]*$s["micro"]/3600*0.53,2);?></VAr></td>
                    </tr>
                        <?php $kwh = $kwh + $s["pot_ativa"]*$s["micro"]/3600;?>
                        <?php $valor = $valor + $s["pot_ativa"]*$s["micro"]/3600*0.53;?>
                  <?php endif;?>
                <?php endforeach; ?>
              <tfoot class="table-dark">
                <tr>
                  <th style='text-align:center;vertical-align:middle'><VAr>h</VAr></th>
                  <th style='text-align:center;vertical-align:middle'><VAr>W</VAr></th>
                  <th style='text-align:center;vertical-align:middle'><VAr>VA</VAr></th>
                  <th style='text-align:center;vertical-align:middle'><VAr>VAr</VAr></th>
                  <th style='text-align:center;vertical-align:middle'><VAr>-</VAr></th>
                  <th style='text-align:center;vertical-align:middle'><VAr>kWh</VAr></th>
                  <th style='text-align:center;vertical-align:middle'><VAr>R$</VAr></th>
                </tr>
              </tfoot>
            </table>
            <br>
            <div class="col-md-6" id="msg-box">
              <p>kwh total: <?= number_format($kwh,5);?></p>
            </div>
            <div class="col-md-6" id="msg-box">
              <p>Valot total: R$ <?= number_format($valor,2);?></p>
            </div>
        <?php endif;?>
      <?php endforeach; ?>
      <br>
      
    
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="./assets/js/jquery-3.5.1.slim.min.js"></script>
      <script src="./assets/js/popper.min.js"></script>
      <script src="./assets/js/bootstrap.min.js"></script>
    </div>
    </body>
</html>