<?php
		require_once 'Serie.php';
		require_once 'SerieDAO.php';

	  $banco_serie = new SerieDAO();
	  if(isset($_POST["idTVShow"])){
	    $serie = $banco_serie->buscarPorId($_POST["idTVShow"]);
	  }
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>

    <form action="SerieHelper.php?acao=alterar" method="post">
                
        <input type="number" name="idTVShow" id="idTVShow" value="<?php echo $serie->getIdTVShow() ?>" readonly ><br>
        <input type="text" name="name" value="<?php echo $serie->getName()?>" required><br>
        <input type="number" name="season" value="<?php echo $serie->getSeason()?>" required><br>
        <input type="number" name="episodes" value="<?php echo $serie->getEpisodes()?>" required><br>
        <input type="text" name="genre" value="<?php echo $serie->getGenre()?>" required><br>
        <input type="number" name="exibitionYear" value="<?php echo $serie->getExibitionYear()?>" required><br>
        <input type="text" name="creator" value="<?php echo $serie->getCreator()?>" required><br>
        <input type="text" name="channel" value="<?php echo $serie->getChannel()?>" required><br>
        <input type="radio" name="status" value="0" checked> Em Exibição<br>
        <input type="radio" name="status" value="1"> Concluída<br>

        <div class="modal-footer">
        <input type="submit" value="Ediar" class="btn btn-success">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
    </form>
	
</body>


</html>
