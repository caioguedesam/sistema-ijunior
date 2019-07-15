<!DOCTYPE html>
<html lang="en">
<head>
  <title>TVNews</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="includes/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<!-- Inclui o header -->
<?php include "includes/header.php"; 

require_once 'model/Filme.php';
require_once 'controller/FilmeDAO.php';
require_once 'model/Serie.php';
require_once 'controller/SerieDAO.php';

$banco_filme = new filmeDAO();
$filmes1 = $banco_filme->listarTop3Assistidos();
$filmes2 = $banco_filme->listarTop3WatchList();

$banco_serie = new serieDAO();
$series1 = $banco_serie->listarTop3Assistidos();
$series2 = $banco_serie->listarTop3WatchList();

?>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-6">
      <h2>Filmes</h2>
      <br>
      <img src="assets/filmesicon.png">
      <h3>Filmes mais assistidos</h3>
      <ul>
      <?php
        foreach ($filmes1 as $filmes) {
          if ($filmes->getStatus()) {
        ?>
        <tr>
          <li><?php echo $filmes->getName()?></li>
          <?php
          }
        }
      ?>
      </ul>
      <h3>Filmes mais desejados</h3>
      <ul>
      <?php
        foreach ($filmes2 as $filmes) {
          if ($filmes->getStatus()) {
        ?>
        <tr>
          <li><?php echo $filmes->getName()?></li>
          <?php
          }
        }
      ?>
      </ul>
      <br>
    </div>
    <div class="col-sm-6">
      <h2>Séries</h2>
      <br>
      <img src="assets/seriesicon.png">
      <h3>Temporadas mais assistidas</h3>
      <ul>
      <?php
        foreach ($series1 as $serie) {
          if ($serie->getActive()) {
        ?>
        <tr>
          <li><?php echo $serie->getName()?></li>
          <?php
          }
        }
      ?>
      </ul>
      <h3>Temporadas mais desejadas</h3>
      <ul>
      <?php
        foreach ($series2 as $serie) {
          if ($serie->getActive()) {
        ?>
        <tr>
          <li><?php echo $serie->getName()?></li>
          <?php
          }
        }
      ?>
      </ul>
      <br>
    </div>
  </div>
  <br><br>
</div>

<?php include "includes/footer.php"; ?>

</body>
<!--
Links de ícones usados: 
<div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Watching tv">Watching tv</a> from <a href="https://www.flaticon.com/"     title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/"     title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
<div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Movie tickets">Movie tickets</a> from <a href="https://www.flaticon.com/"     title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/"     title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
-->
</html>
