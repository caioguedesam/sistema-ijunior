<?php
require_once 'Filme.php';
require_once 'FilmeDAO.php';
$banco_filme = new filmeDAO();
$filmes = $banco_filme->listar();

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
      <img src="assets/filmesicon.png">
      <h2>Filmes</h2>
      <br>
      <!--Tabela de Filmes-->
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Ano de Lançamento</th>
            <th scope="col">Duração</th>
            <th scope="col">Gênero</th>
            <th scope="col">Diretor</th>
            <th scope="col">Estúdio</th>
            <th scope="col">Opção 1</th>
            <th scope="col">Opção 2</th>
            <th scope="col">Opção 3</th>
            <th scope="col">Opção 4</th>
          </tr>
        </thead>
        <tbody>
          <?php
					foreach ($filmes as $filmes) {
            if ($filmes->getStatus()) {
				  ?>
          <tr>
            <th scope="row"><?php echo $filmes->getIdMovie()?></th>
            <td><?php echo $filmes->getName()?></td>
            <td><?php echo $filmes->getReleaseYear()?></td>
            <td><?php echo $filmes->getRunningTime() . " min"?></td>
            <td><?php echo $filmes->getGenre()?></td>
            <td><?php echo $filmes->getDirector()?></td>
            <td><?php echo $filmes->getStudio()?></td>
            <td>
                <input type="hidden" name="idMovie" value="<?php echo $filmes->getIdMovie()?>" />
                <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modalEdit">Editar</button>
                <?php include "includes/modalEditMovie.php" ?>
            </td>
            
            <td>
              <!-- Colocar uma verificação!!! -->
              <form action="FilmeHelper.php?acao=excluir" method="post">
                <input type="hidden" name="idMovie" value="<?php echo $filmes->getIDMovie()?>" />
                <button type="submit" class="btn btn-outline-danger" id="deleteBtn">Excluir</button>
              </form>
            </td>
            <td></td>
            <td><form action="FilmeHelper.php?acao=watchlist" method="post">
                <input type="hidden" name="idMovie" value="<?php echo $filmes->getIDMovie()?>" />
                <button type="submit" class="btn btn-outline-danger" id="watchListBtn">Add to Watchlist</button>
              </form></td>
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