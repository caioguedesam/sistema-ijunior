<div class="modal" tabindex="-1" role="dialog" id="modalWatchList<?php echo $users->getIdUser();?>">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Desejados por <?php echo $users->getName();?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        
        <form action="UserHelper.php?acao=listWatchList" method="post">

            <!--Tabela de Filmes-->
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Ano de Lançamento</th>
                </tr>
              </thead>
              <tbody>
                <?php
                require_once 'Filme.php';
                require_once 'FilmeDAO.php';
                require_once 'Serie.php';
                require_once 'SerieDAO.php';
                require_once 'User.php';
                require_once 'UserDAO.php';

                $banco_filme = new filmeDAO();
                $filmes = $banco_filme->listarWatchList($users);
                
                $banco_serie = new SerieDAO();
                $series = $banco_serie->listarWatchList($users);

                foreach ($filmes as $filmes) {
                  if ($filmes->getStatus()) {
                ?>
                <tr>
                  <th scope="row"><?php echo $filmes->getIdMovie()?></th>
                  <td><?php echo $filmes->getName()?></td>
                  <td><?php echo $filmes->getReleaseYear()?></td>
                </tr>
                <?php
                  }
                }
                ?>
              </tbody>
            </table>
            <!-- Fim da Tabela TESTE -->

            <!--Tabela de Series-->
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Temporada</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($series as $series) {
                ?>
                <tr>
                  <th scope="row"><?php echo $series->getIdTVShow()?></th>
                  <td><?php echo $series->getName()?></td>
                  <td><?php echo $series->getSeason()?></td>
                </tr>
                <?php
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