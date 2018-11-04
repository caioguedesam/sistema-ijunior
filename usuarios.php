<?php
//Acho que o erro que nã oestá abrindo usuarios.php tem a ver com isso aqui (1/2, o outro está no userDAO.php)
require_once 'User.php';
require_once 'UserDAO.php';
$banco_user = new UserDAO();
$users = $banco_user->listar();

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
  <h1>TVNews - Portal de Filmes</h1> 
</div>

<!-- Inclui o menu -->
<?php include "includes/menu.php"; ?>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col">
      <br>
      <img src="assets/TVNews.png">
      <h2>Usuários</h2>
      <br>
      <!--Botão 1-->
      <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modalUser">Registrar Usuário</button>
      <!--Modal para registro de USUÁRIOS-->
      <div class="modal" tabindex="-1" role="dialog" id="modalUser">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Registrar Usuário</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="UserHelper.php?acao=novo" method="post">
                
                <input type="text" name="name" placeholder="Nome"><br>

                <div class="modal-footer">
                <input type="submit" value="Registrar" class="btn btn-success">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
              </form>
            </div>
            </div>
          </div>
        </div>
      </div>
      <!--Tabela de Filmes-->
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Opções</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($users as $users) {
            if ($users->getIdUser()) {
          ?>
          <tr>
            <th scope="row"><?php echo $users->getIdUser()?></th>
            <td><?php echo $users->getName()?></td>
            <td><button type="button" class="btn btn-outline-danger" id="tablebtn">Opção Teste</button></td>
            <td><button type="button" class="btn btn-outline-danger" id="tablebtn">Opção Teste</button></td>
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
  <p>TVNews - Todos os Direitos Reservados</p>
</div>

<div class="bg-modal"></div>

</body>
<!--
Links de ícones usados: 
<div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Watching tv">Watching tv</a> from <a href="https://www.flaticon.com/"     title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/"     title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
<div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Movie tickets">Movie tickets</a> from <a href="https://www.flaticon.com/"     title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/"     title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
-->
</html>