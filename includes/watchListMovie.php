<div class="modal" tabindex="-1" role="dialog" id="modalWatchList<?php echo $filmes->getIdMovie();?>">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add to WatchList <?php echo $filmes->getName();?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="FilmeHelper.php?acao=watchList" method="post">
            <input type='hidden' name='movie' id="movie" value='<?php echo $filmes->getIdMovie();?>'/>
            <input type="text" name="user" id="user" placeholder="Nome do Usuário"><br><br>

            <div class="modal-footer">
            <input type="submit" value="Adicionar" class="btn btn-success">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>