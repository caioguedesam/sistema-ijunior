<?php
	class UserDAO{
		

		public function conectar(){
			$host = 'localhost';
			$usuario = 'root';
			$senha = '';
			$database = 'tvnews';
			$conexao = new mysqli($host, $usuario, $senha, $database);

			return $conexao;
		}

		function novo($user){
			$situacao = TRUE;
			try{
				$c = $this->conectar();
				$query = "INSERT INTO User (name) values ('{$user->getName()}')";
				$c->query($query);
				$codigo = $c->insert_id;
                $user->setIdUser($codigo);
				$c->close();
			}catch(Exception $ex){
				$situacao = FALSE;
				echo $ex->getFile().' : '.$ex->getLine().' : '.$ex->getMessage();
			}
			return $situacao;
		}

		//Acho que o erro que não está abrindo o usuarios.php tem a ver com isso aqui! (2/2)
		function listar(){
			$users = array();
			try{
				$c = $this->conectar();
				$query = "select * from User";
				$resultado = $c->query($query);
				$c->close();
				while($registro = mysqli_fetch_assoc($resultado)) {
					$user = new User();
					$serie->setIdUser($registro['idUser']);
					$serie->setName($registro['name']);
					array_push($users, $user);
				}
				$resultado->close();
			}catch(Exception $ex){
				echo $ex->getFile().' : '.$ex->getLine().' : '.$ex->getMessage();
			}
			return $users;
		}

		/*function alterar($cliente){
			$situacao = TRUE;
			$c = $this->conectar();
			try{
				$query = "UPDATE tbcliente SET nmcliente='{$cliente->getNmcliente()}', cpfcliente='{$cliente->getCpf()}', telcliente='{$cliente->getTelefone()}' WHERE cdcliente='{$cliente->getIdCliente()}'";
				$c->query($query);
				$c->close();
			}catch(Exception $ex){
				$situacao = FALSE;
				echo $ex->getFile().' : '.$ex->getLine().' : '.$ex->getMessage();
			}
			return $situacao;
		}

		function excluir($idcliente){
			$situacao = TRUE;
			$c = $this->conectar();
			try{
					$query = "delete from tbcliente where cdcliente = {$idcliente}";
					$c->query($query);
					$c->close();
			}catch(Exception $ex){
				$situacao = FALSE;
				echo $ex->getFile().' : '.$ex->getLine().' : '.$ex->getMessage();
			}
			return $situacao;
		}

		function listar(){
			$clientes = array();
			try{
				$c = $this->conectar();
				$query = "select * from tbcliente";
				$resultado = $c->query($query);
				$c->close();
				while($registro = mysqli_fetch_assoc($resultado)) {
					$cliente = new Cliente();
					$cliente->setIdcliente($registro['cdcliente']);
					$cliente->setNmcliente($registro['nmcliente']);
					$cliente->setCpf($registro['cpfcliente']);
					$cliente->setTelefone($registro['telcliente']);
					array_push($clientes, $cliente);
				}
				$resultado->close();
			}catch(Exception $ex){
				echo $ex->getFile().' : '.$ex->getLine().' : '.$ex->getMessage();
			}
			return $clientes;
		}

		function buscarPorId($codigo){
			$cliente = new Cliente();
			try{
				$c = $this->conectar();
				$query = "select * from tbcliente where cdcliente = {$codigo}";
				$resultado = $c->query($query);
				$c->close();
				$registro = mysqli_fetch_assoc($resultado);
				$cliente->setIdCliente($registro['cdcliente']);
				$cliente->setNmcliente($registro['nmcliente']);
				$cliente->setCpf($registro['cpfcliente']);
				$cliente->setTelefone($registro['telcliente']);
			}catch(Exception $ex){
				echo $ex->getFile().' : '.$ex->getLine().' : '.$ex->getMessage();
			}

			return $cliente;
        }*/

	}

?>
