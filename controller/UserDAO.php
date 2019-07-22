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

		function alterar($user){
			$situacao = TRUE;
			$c = $this->conectar();
			try{
				$query = "UPDATE User SET name='{$user->getname()}', WHERE idUser='{$user->getId()}'";
				$c->query($query);
				$c->close();
			}catch(Exception $ex){
				$situacao = FALSE;
				echo $ex->getFile().' : '.$ex->getLine().' : '.$ex->getMessage();
			}
			return $situacao;
		}

		function excluir($user){
			$situacao = TRUE;
			$c = $this->conectar();
			try{
					$query = "delete from User cdcliente = {$idcliente}";
					$c->query($query);
					$c->close();
			}catch(Exception $ex){
				$situacao = FALSE;
				echo $ex->getFile().' : '.$ex->getLine().' : '.$ex->getMessage();
			}
			return $situacao;
		}

		function listar(){
			$users = array();
			try{
				$c = $this->conectar();
				$query = "select * from User";
				$resultado = $c->query($query);
				$c->close();
				while($registro = mysqli_fetch_assoc($resultado)) {
					$user = new User();
					$user->setIdUser($registro['idUser']);
					$user->setName($registro['name']);
					array_push($users, $user);
				}
				$resultado->close();
			}catch(Exception $ex){
				echo $ex->getFile().' : '.$ex->getLine().' : '.$ex->getMessage();
			}
			return $users;
		}

		function buscarPorId($codigo){
			$user = new User();
			try{
				$c = $this->conectar();
				$query = "select * from User where idUsuario = '{$codigo}'";
				$resultado = $c->query($query);
				$c->close();
				$registro = mysqli_fetch_assoc($resultado);
				$user->setidUser($registro['idUser']);
				$user->setName($registro['name']);
			}catch(Exception $ex){
				echo $ex->getFile().' : '.$ex->getLine().' : '.$ex->getMessage();
			}

			return $user;
		}
		
		function buscarPorNome($name){
			$user = new User();
			try{
				$c = $this->conectar();
				$query = "select * from User where name = '{$name}'";
				$resultado = $c->query($query);
				$c->close();
				$registro = mysqli_fetch_assoc($resultado);
				$user->setidUser($registro['idUser']);
				$user->setName($registro['name']);
			}catch(Exception $ex){
				echo $ex->getFile().' : '.$ex->getLine().' : '.$ex->getMessage();
			}

			return $user;
        }

	}

?>
