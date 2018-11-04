<?php
    require_once 'Serie.php';
    require_once 'SerieDAO.php';
	$acao = $_GET["acao"];
	
	switch($acao){
		case 'novo':
			$banco_serie = new SerieDAO();
			$serie = new Serie();
		
            $serie->setName($_POST["name"]);
            $serie->setSeason($_POST["season"]);
            $serie->setEpisodes($_POST["episodes"]);
			$serie->setGenre($_POST["genre"]);
			$serie->setExibitionYear($_POST["exibitionYear"]);
            $serie->setCreator($_POST["creator"]);
			$serie->setChannel($_POST["channel"]);
			$serie->setStatus($_POST["status"]);
		
			if($banco_serie->novo($serie)){
				echo "<script>alert('Série salva com sucesso!');</script>";
			}else{
				echo "<script>alert('Erro ao salvar a série!.');</script>";
			}
			echo "<script>location.href='registro.php';</script>";
		break;

		case 'excluir':
			$banco_serie = new serieDAO();
			
			$idTVShow = $_POST["idTVShow"];
			
			if($banco_serie->excluir($idTVShow)){
				echo "<script>alert('Registro excluído com sucesso!');</script>";
			}else{
				echo "<script>alert('Erro ao excluir a Série.');</script>";
			}
			echo "<script>location.href='series.php';</script>";
		break;
		

		case 'alterar':
			$banco_serie = new SerieDAO();
			$serie = new Serie();
			
			$serie->setIdTVShow($_POST["idTVShow"]);
			$serie->setName($_POST["name"]);
            $serie->setSeason($_POST["season"]);
            $serie->setEpisodes($_POST["episodes"]);
			$serie->setGenre($_POST["genre"]);
			$serie->setExibitionYear($_POST["exibitionYear"]);
            $serie->setCreator($_POST["creator"]);
			$serie->setChannel($_POST["channel"]);
			$serie->setStatus($_POST["status"]);
			
			if($banco_serie->alterar($serie)){
				echo "<script>alert('Série alterado com sucesso!');</script>";
			}else{
				echo "<script>alert('Erro ao alterar o Série.');</script>";
			}
            echo "<script>location.href='series.php';</script>";
            
	}

?>
