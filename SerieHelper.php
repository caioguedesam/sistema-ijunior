<?php
    require_once 'Serie.php';
    require_once 'SerieDAO.php';
    require_once 'User.php';
    require_once 'UserDAO.php';
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
			$banco_serie = new SerieDAO();
			
			$idTVShow = $_POST["idSerie"];
			
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
        break;
        case 'avaliar':
			$banco_serie = new SerieDAO();
			$banco_user = new UserDAO();

			$serie = $banco_serie->buscarPorId($_POST["serie"]);
			$grade = $_POST["grade"];
			if($banco_serie->rating($serie, $banco_user->buscarPorNome($_POST["user"]), $grade))
			{
				echo "<script>alert('Temporada avaliada com sucesso!');</script>";
			}else{
				echo "<script>alert('Erro ao avaliar a Temporada!');</script>";
			}
            echo "<script>location.href='series.php';</script>";
		break;
        case 'watchList':
			$banco_serie = new SerieDAO();
			$banco_user = new UserDAO();

			$serie = $banco_serie->buscarPorId($_POST["serie"]);
			if($banco_serie->watchList($serie, $banco_user->buscarPorNome($_POST["user"])))
			{
				echo "<script>alert('Temporada adicionada com sucesso!');</script>";
			}else{
				echo "<script>alert('Erro ao adicionar a Temporada!');</script>";
			}
            echo "<script>location.href='series.php';</script>";
		break;
	}

?>
