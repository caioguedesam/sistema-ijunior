<div class="modal" tabindex="-1" role="dialog" id="modalDelete<?php echo $filmes->getIdMovie();?>">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Excluir Filme</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../controller/FilmeHelper.php?acao=excluir" method="post">
            <p>Deseja realmente excluir <?php echo $filmes->getName(); ?>?</p>
            <input type="hidden" name="idMovie" value="<?php echo $filmes->getIdMovie();?>"/>
            <div class="modal-footer">
            <input type="submit" value="Confirmar" class="btn btn-success">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>