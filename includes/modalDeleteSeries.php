<div class="modal" tabindex="-1" role="dialog" id="modalDelete<?php echo $series->getIdTVShow();?>">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Excluir Temporada</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="SerieHelper.php?acao=excluir" method="post">
            <p>Deseja realmente excluir <?php echo $series->getName(); ?>?</p>
            <input type="hidden" name="idSerie" value="<?php echo $series->getIdTVShow();?>"/>
            <div class="modal-footer">
            <input type="submit" value="Confirmar" class="btn btn-success">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>