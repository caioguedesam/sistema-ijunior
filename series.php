<?php
require_once 'Serie.php';
require_once 'SerieDAO.php';
$banco_serie = new serieDAO();
$series = $banco_serie->listar();

?>

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

<div class="jumbotron text-center">
  <h1>TVNews</h1> 
</div>

<!-- Inclui o menu -->
<?php include "includes/menu.php"; ?>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col">
      <br>
      <img src="assets/seriesicon.png">
      <h2>Séries</h2>
      <br>
      <!--Tabela de Filmes-->
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Temporada</th>
            <th scope="col">Número de Ep.</th>
            <th scope="col">Gênero</th>
            <th scope="col">Ano de Exib.</th>
            <th scope="col">Criador</th>
            <th scope="col">Canal</th>
            <th scope="col">Status</th>
            <th scope="col">Opção 1</th>
            <th scope="col">Opção 2</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($series as $series) {
            if ($series->getActive()) {
          ?>
          <tr>
            <th scope="row"><?php echo $series->getIdTVShow()?></th>
            <td><?php echo $series->getName()?></td>
            <td><?php echo $series->getSeason()?></td>
            <td><?php echo $series->getEpisodes() . " min"?></td>
            <td><?php echo $series->getGenre()?></td>
            <td><?php echo $series->getExibitionYear()?></td>
            <td><?php echo $series->getCreator()?></td>
            <td><?php echo $series->getChannel()?></td>
            <td><?php echo $series->printStatus()?></td>
            <td>
              <form action="editarSerie.php" method="post">
                <input type="hidden" name="idTVShow" value="<?php echo $series->getIdTVShow()?>" />
                <button type="submit" class="btn btn-outline-danger" id="editBtn">Editar</button>
              </form>
            </td>
            <td>
              <!-- Colocar uma verificação!!! -->
              <form action="SerieHelper.php?acao=excluir" method="post">
                <input type="hidden" name="idTVShow" value="<?php echo $series->getIdTVShow()?>" />
                <button type="submit" class="btn btn-outline-danger" id="deleteBtn">Excluir</button>
              </form>
            </td>
          </tr>
          <?php
            }
          }
          ?>
        </tbody>
      </table>
      <!-- Fim da Tabela TESTE -->
    </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>TVNews Rodapé</p>
</div>

<div class="bg-modal"></div>

</body>
<!--
Links de ícones usados: 
<div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Watching tv">Watching tv</a> from <a href="https://www.flaticon.com/"     title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/"     title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
<div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Movie tickets">Movie tickets</a> from <a href="https://www.flaticon.com/"     title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/"     title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
-->
</html>