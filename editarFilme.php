<?php
		require_once 'Filme.php';
		require_once 'FilmeDAO.php';

	  $banco_movie = new FilmeDAO();
	  if(isset($_POST["idMovie"])){
	    $movie = $banco_movie->buscarPorId($_POST["idMovie"]);
	  }
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>

    <form action="FilmeHelper.php?acao=alterar" method="post">
                
        <input type="number" name="idMovie" id="idMovie" value="<?php echo $movie->getIdMovie() ?>" readonly ><br>
        <input type="text" name="name" value="<?php echo $movie->getName()?>" required><br>
        <input type="number" name="releaseYear" value="<?php echo $movie->getReleaseYear()?>" required><br>
        <input type="number" name="runningTime" value="<?php echo $movie->getRunningTime()?>" required><br>
        <input type="text" name="genre" value="<?php echo $movie->getGenre()?>" required><br>
        <input type="text" name="director" value="<?php echo $movie->getDirector()?>" required><br>
        <input type="text" name="studio" value="<?php echo $movie->getStudio()?>" required><br>

        <div class="modal-footer">
        <input type="submit" value="Editar" class="btn btn-success">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
    </form>
	
</body>


</html>
