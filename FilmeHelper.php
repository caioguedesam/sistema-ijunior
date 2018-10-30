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
				echo "<script>alert('Erro ao salvar o Filme!.');</script>";
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
