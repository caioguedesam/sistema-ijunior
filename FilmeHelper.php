<?php
    require_once 'Filme.php';
    require_once 'FilmeDAO.php';
	$acao = $_GET["acao"];
	
	switch($acao){
		case 'novo':
			$banco_movie = new FilmeDAO();
			$movie = new Filme();
		
            $movie->setName($_POST["name"]);
            $movie->setReleaseYear($_POST["releaseYear"]);
            $movie->setRunningTime($_POST["runningTime"]);
            $movie->setGenre($_POST["genre"]);
            $movie->setDirector($_POST["director"]);
            $movie->setStudio($_POST["studio"]);
		
			if($banco_movie->novo($movie)){
				echo "<script>alert('Filme salvo com sucesso!');</script>";
			}else{
				echo "<script>alert('Erro ao salvar o Filme!');</script>";
			}
			echo "<script>location.href='registro.php';</script>";
		break;

		case 'alterar':
			$banco_movie = new FilmeDAO();
			$movie = new Filme();
			
			$movie->setIdMovie($_POST["idMovie"]);
			$movie->setName($_POST["name"]);
            $movie->setReleaseYear($_POST["releaseYear"]);
            $movie->setRunningTime($_POST["runningTime"]);
            $movie->setGenre($_POST["genre"]);
            $movie->setDirector($_POST["director"]);
            $movie->setStudio($_POST["studio"]);
			
			
			if($banco_movie->alterar($movie)){
				echo "<script>alert('Filme alterado com sucesso!');</script>";
			}else{
				echo "<script>alert('Erro ao alterar o Filme!');</script>";
			}
            echo "<script>location.href='filmes.php';</script>";

		case 'excluir':
			$banco_movie = new FilmeDAO();
			
			$idMovie = $_POST["idMovie"];
			
			if($banco_movie->excluir($idMovie)){
				echo "<script>alert('Registro excluído com sucesso!');</script>";
			}else{
				echo "<script>alert('Erro ao excluir o Filme.');</script>";
			}
			echo "<script>location.href='filmes.php';</script>";
		break;

	}

?>
