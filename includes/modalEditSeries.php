<div class="modal" tabindex="-1" role="dialog" id="modalEdit<?php echo $series->getIdTVShow();?>">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Editar Série</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="SerieHelper.php?acao=alterar" method="post">
                
                <input type="number" name="idTVShow" id="idTVShow" value="<?php echo $series->getIdTVShow() ?>" readonly ><br>
                <input type="text" name="name" value="<?php echo $series->getName()?>" required><br>
                <input type="number" name="season" value="<?php echo $series->getSeason()?>" required><br>
                <input type="number" name="episodes" value="<?php echo $series->getEpisodes()?>" required><br>
                <input type="text" name="genre" value="<?php echo $series->getGenre()?>" required><br>
                <input type="number" name="exibitionYear" value="<?php echo $series->getExibitionYear()?>" required><br>
                <input type="text" name="creator" value="<?php echo $series->getCreator()?>" required><br>
                <input type="text" name="channel" value="<?php echo $series->getChannel()?>" required><br>
                <input type="radio" name="status" value="0" checked> Em Exibição<br>
                <input type="radio" name="status" value="1"> Concluída<br>
        
                <div class="modal-footer">
                <input type="submit" value="Editar" class="btn btn-success">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </form>
            </div>
          </div>
        </div>
      </div>