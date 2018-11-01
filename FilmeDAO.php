<?php
	class FilmeDAO{
		

		public function conectar(){
			$host = 'localhost';
			$usuario = 'root';
			$senha = '';
			$database = 'tvnews';
			$conexao = new mysqli($host, $usuario, $senha, $database);

			return $conexao;
		}

		function novo($movie){
			$situacao = TRUE;
			try{
				$c = $this->conectar();
				$query = "INSERT INTO Movie (name,releaseYear,runningTime, genre, director, studio, active) values ('{$movie->getName()}', '{$movie->getReleaseYear()}', '{$movie->getRunningTime()}', '{$movie->getGenre()}', '{$movie->getDirector()}', '{$movie->getStudio()}', '1')";
				$c->query($query);
				$codigo = $c->insert_id;
                $movie->setIdMovie($codigo);
				$c->close();
			}catch(Exception $ex){
				$situacao = FALSE;
				echo $ex->getFile().' : '.$ex->getLine().' : '.$ex->getMessage();
			}
			return $situacao;
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
		}*/

		function listar(){
			$filmes = array();
			try{
				$c = $this->conectar();
				$query = "select * from Movie";
				$resultado = $c->query($query);
				$c->close();
				while($registro = mysqli_fetch_assoc($resultado)) {
					$filme = new Filme();
					$filme->setIdMovie($registro['idMovie']);
					$filme->setName($registro['name']);
					$filme->setReleaseYear($registro['releaseYear']);
					$filme->setRunningTime($registro['runningTime']);
					$filme->setGenre($registro['genre']);
					$filme->setDirector($registro['director']);
					$filme->setStudio($registro['studio']);
					$filme->setStatus($registro['active']);
					array_push($filmes, $filme);
				}
				$resultado->close();
			}catch(Exception $ex){
				echo $ex->getFile().' : '.$ex->getLine().' : '.$ex->getMessage();
			}
			return $filmes;
		}

		/*function buscarPorId($codigo){
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
