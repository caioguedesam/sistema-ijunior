<?php 

echo '<div class="modal" tabindex="-1" role="dialog" id="modalFilme">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Registrar Filme</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="FilmeHelper.php?acao=novo" method="post">
                
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
      </div>'

?>