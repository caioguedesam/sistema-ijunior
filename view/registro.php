<!DOCTYPE html>
<html lang="en">
<head>
  <title>TVNews</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="../includes/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<!-- Inclui o header -->
<?php include "../includes/header.php"; ?>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-6">
      <br>
      <img src="../assets/filmesicon.png">
      <h2>Filmes</h2>
      <br>
      <!--Botão 1-->
      <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modalFilme">Registrar Filme</button>
      <!--Modal para registro de FILMES-->
      <div class="modal" tabindex="-1" role="dialog" id="modalFilme">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Registrar Filme</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="../controller/FilmeHelper.php?acao=novo" method="post">
                
                <input type="text" name="name" placeholder="Nome"><br>
                <input type="number" name="releaseYear"placeholder="Ano de Lançamento"><br>
                <input type="number" name="runningTime"placeholder="Duração"><br>
                <input type="text" name="genre" placeholder="Gênero"><br>
                <input type="text" name="director" placeholder="Diretor"><br>
                <input type="text" name="studio"placeholder="Estúdio"><br>

                <div class="modal-footer">
                <input type="submit" value="Registrar" class="btn btn-success">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
              </form>
            </div>
            </div>
          </div>
        </div>
      </div>
      <!--Fim do Modal-->
    </div>
    <div class="col-sm-6">
      <br>
      <img src="../assets/seriesicon.png">
      <h2>Séries</h2>
      <br>
      <!--Botão 2-->
      <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modalSerie">Registrar Série (Temporada)</button>
      <!--Modal para registro de SÉRIES-->
      <div class="modal" tabindex="-1" role="dialog" id="modalSerie">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Registrar Série</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="../controller/SerieHelper.php?acao=novo" method="post">
                
                <input type="text" name="name" placeholder="Nome"><br>
                <input type="number" name="season" placeholder="Temporada"><br>
                <input type="number" name="episodes" placeholder="Nº de Episódios"><br>
                <input type="text" name="genre" placeholder="Gênero"><br>
                <input type="number" name="exibitionYear" placeholder="Ano de Exibição"><br>
                <input type="text" name="creator" placeholder="Criador"><br>
                <input type="text" name="channel" placeholder="Canal"><br>
                <input type="radio" name="status" value="0" checked> Em Exibição<br>
                <input type="radio" name="status" value="1"> Concluída<br>

                <div class="modal-footer">
                <input type="submit" value="Registrar" class="btn btn-success">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!--Fim do Modal-->
    </div>
  </div>
</div>

<?php include "../includes/footer.php"; ?>

<div class="bg-modal"></div>

</body>
<!--
Links de ícones usados: 
<div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Watching tv">Watching tv</a> from <a href="https://www.flaticon.com/"     title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/"     title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
<div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Movie tickets">Movie tickets</a> from <a href="https://www.flaticon.com/"     title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/"     title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
-->
</html>
