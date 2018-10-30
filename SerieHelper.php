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
			echo "<script>location.href='registro.html';</script>";
		break;

		/*case 'excluir':
			$banco_cliente = new ClienteDAO();
			
			$idcliente = $_POST["idcliente"];
			
			if($banco_cliente->excluir($idcliente)){
				echo "<script>alert('Registro excluído com sucesso!');</script>";
			}else{
				echo "<script>alert('Erro ao excluir o Sucesso.');</script>";
			}
			echo "<script>location.href='listarClientes.php';</script>";
		break;
		
		case 'alterar':
			$banco_cliente = new ClienteDAO();
			$cliente = new Cliente();
			
			$cliente->setIdCliente($_POST["idcliente"]);
			$cliente->setNmcliente($_POST["nmcliente"]);
			$cliente->setCpf($_POST["cpfcliente"]);
			$cliente->setTelefone($_POST["telcliente"]);
			
			if($banco_cliente->alterar($cliente)){
				echo "<script>alert('Cliente alterado com sucesso!');</script>";
			}else{
				echo "<script>alert('Erro ao alterar o Cliente.');</script>";
			}
            echo "<script>location.href='listarClientes.php';</script>";
            
            */
	}

?>
