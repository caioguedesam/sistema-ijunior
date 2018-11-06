<div class="modal" tabindex="-1" role="dialog" id="modalRate<?php echo $series->getIdTVShow();?>">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Avaliar <?php echo $series->getName();?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="SerieHelper.php?acao=avaliar" method="post">
            <input type='hidden' name='serie' id="serie" value='<?php echo $series->getIdTVShow();?>'/>
            <input type="text" name="user" id="user" placeholder="Nome do Usuário"><br><br>
            <input type="radio" name="grade" id="grade" value="1" checked>1<br>
            <input type="radio" name="grade" id="grade" value="2">2<br>
            <input type="radio" name="grade" id="grade" value="3">3<br>
            <input type="radio" name="grade" id="grade" value="4">4<br>
            <input type="radio" name="grade" id="grade" value="5">5<br>

            <div class="modal-footer">
            <input type="submit" value="Avaliar" class="btn btn-success">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>