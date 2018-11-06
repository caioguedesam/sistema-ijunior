<div class="modal" tabindex="-1" role="dialog" id="modalWatched<?php echo $users->getIdUser();?>">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Filmes Assistidos por <?php echo $users->getName();?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        
        <form action="UserHelper.php?acao=listWatched" method="post">

            <!--Tabela de Filmes-->
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nome</th>
                </tr>
              </thead>
              <tbody>
                <?php
                require_once 'Filme.php';
                require_once 'FilmeDAO.php';
                require_once 'User.php';
                require_once 'UserDAO.php';

                $banco_filme = new filmeDAO();
                $filmes = $banco_filme->listarWatched($users);


                foreach ($filmes as $filmes) {
                  if ($filmes->getStatus()) {
                ?>
                <tr>
                  <th scope="row"><?php echo $filmes->getIdMovie()?></th>
                  <td><?php echo $filmes->getName()?></td>
                </tr>
                <?php
                  }
                }
                ?>
              </tbody>
            </table>
            <!-- Fim da Tabela TESTE -->

            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>