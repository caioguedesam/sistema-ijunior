<!-- Tem q consertar. Só tá aparecendo o primeiro filme pra editar, e não o resto -->
<div class="modal" tabindex="-1" role="dialog" id="modalEdit<?php echo $filmes->getIdMovie();?>">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar Filme</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../controller/FilmeHelper.php?acao=alterar" method="post">
                    
            <input type="number" name="idMovie" id="idMovie" value="<?php echo $filmes->getIdMovie() ?>" readonly ><br>
            <input type="text" name="name" value="<?php echo $filmes->getName()?>" required><br>
            <input type="number" name="releaseYear" value="<?php echo $filmes->getReleaseYear()?>" required><br>
            <input type="number" name="runningTime" value="<?php echo $filmes->getRunningTime()?>" required><br>
            <input type="text" name="genre" value="<?php echo $filmes->getGenre()?>" required><br>
            <input type="text" name="director" value="<?php echo $filmes->getDirector()?>" required><br>
            <input type="text" name="studio" value="<?php echo $filmes->getStudio()?>" required><br>
            <div class="modal-footer">
            <input type="submit" value="Editar" class="btn btn-success">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>