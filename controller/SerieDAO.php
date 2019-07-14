<?php
	class SerieDAO{
		

		public function conectar(){
			$host = 'localhost';
			$usuario = 'root';
			$senha = '';
			$database = 'tvnews';
			$conexao = new mysqli($host, $usuario, $senha, $database);

			return $conexao;
		}

		function novo($serie){
			$situacao = TRUE;
			try{
				$c = $this->conectar();
				$query = "INSERT INTO TVShow (name,season, episodes, genre, exibitionYear, creator, channel, status, active) values ('{$serie->getName()}', '{$serie->getSeason()}', '{$serie->getEpisodes()}', '{$serie->getGenre()}', '{$serie->getExibitionYear()}', '{$serie->getCreator()}', '{$serie->getChannel()}', '{$serie->getStatus()}', '1')";
				$c->query($query);
				$codigo = $c->insert_id;
                $serie->setIdTVShow($codigo);
				$c->close();
			}catch(Exception $ex){
				$situacao = FALSE;
				echo $ex->getFile().' : '.$ex->getLine().' : '.$ex->getMessage();
			}
			return $situacao;
		}

		function listar(){
			$series = array();
			try{
				$c = $this->conectar();
				$query = "select * from TVShow";
				$resultado = $c->query($query);
				$c->close();
				while($registro = mysqli_fetch_assoc($resultado)) {
					$serie = new Serie();
					$serie->setIdTVShow($registro['idTVShow']);
					$serie->setName($registro['name']);
					$serie->setSeason($registro['season']);
					$serie->setEpisodes($registro['episodes']);
					$serie->setGenre($registro['genre']);
					$serie->setExibitionYear($registro['exibitionYear']);
					$serie->setCreator($registro['creator']);
					$serie->setChannel($registro['channel']);
					$serie->setStatus($registro['status']);
					$serie->setActive($registro['active']);
					array_push($series, $serie);
				}
				$resultado->close();
			}catch(Exception $ex){
				echo $ex->getFile().' : '.$ex->getLine().' : '.$ex->getMessage();
			}
			return $series;
		}

		function alterar($serie){
			$situacao = TRUE;
			$c = $this->conectar();
			try{
				$query = "UPDATE TVShow SET name='{$serie->getName()}', season='{$serie->getSeason()}', episodes='{$serie->getEpisodes()}', genre='{$serie->getGenre()}', exibitionYear='{$serie->getExibitionYear()}', creator='{$serie->getCreator()}', channel='{$serie->getChannel()}', status='{$serie->getStatus()}' WHERE idTVShow='{$serie->getIdTVShow()}'";
				$c->query($query);
				$c->close();
			}catch(Exception $ex){
				$situacao = FALSE;
				echo $ex->getFile().' : '.$ex->getLine().' : '.$ex->getMessage();
			}
			return $situacao;
		}

		function excluir($serie){
			$situacao = TRUE;
			$c = $this->conectar();
			try{
				$query = "UPDATE TVShow SET active='{0}' WHERE idTVShow='{$serie}'";
					$c->query($query);
					$c->close();
			}catch(Exception $ex){
				$situacao = FALSE;
				echo $ex->getFile().' : '.$ex->getLine().' : '.$ex->getMessage();
			}
			return $situacao;
		}

		function buscarPorId($codigo){
			$serie = new Serie();
			try{
				$c = $this->conectar();
				$query = "select * from TVShow where idTVShow = {$codigo}";
				$resultado = $c->query($query);
				$c->close();
				$registro = mysqli_fetch_assoc($resultado);
				$serie->setIdTVShow($registro['idTVShow']);
				$serie->setName($registro['name']);
				$serie->setSeason($registro['season']);
				$serie->setEpisodes($registro['episodes']);
				$serie->setGenre($registro['genre']);
				$serie->setExibitionYear($registro['exibitionYear']);
				$serie->setCreator($registro['creator']);
				$serie->setChannel($registro['channel']);
				$serie->setStatus($registro['status']);
				$serie->setActive($registro['active']);
			}catch(Exception $ex){
				echo $ex->getFile().' : '.$ex->getLine().' : '.$ex->getMessage();
			}

			return $serie;
		}
		
		function watchList($serie, $user){
			$situacao = TRUE;
			try{
				$c = $this->conectar();
				//INSERT INTO User_TVShow (idUser, idTVShow, watchList, rating) values (1, 1, 1, 0)
				$query = "INSERT INTO User_TVShow (idUser, idTVShow, watchlist, rating) values ('{$user->getIdUser()}', '{$serie->getIdTVShow()}', '1', '0')";
				$c->query($query);
				$codigo = $c->insert_id;
                $serie->setIdTVShow($codigo);
				$c->close();
			}catch(Exception $ex){
				$situacao = FALSE;
				echo $ex->getFile().' : '.$ex->getLine().' : '.$ex->getMessage();
			}
			return $situacao;
		}

		function rating($serie, $user, $grade){
			$situacao = TRUE;
			try{
				$c = $this->conectar();
				//INSERT INTO User_TVShow (idUser, idTVShow, watchList, rating) values (1, 1, 1, 0)
				$query = "INSERT INTO User_TVShow (idUser, idTVShow, watchlist, rating) values ('{$user->getIdUser()}', '{$serie->getIdTVShow()}', '0', '{$grade}')";
				$c->query($query);
				$codigo = $c->insert_id;
                $serie->setIdTVShow($codigo);
				$c->close();
			}catch(Exception $ex){
				$situacao = FALSE;
				echo $ex->getFile().' : '.$ex->getLine().' : '.$ex->getMessage();
			}
			return $situacao;
		}

		function listarWatched($user){
			$series = array();
			try{
				$c = $this->conectar();
				$query = "select * from User_TVShow where idUser = {$user->getIdUser()} AND rating != 0";
				$resultado = $c->query($query);
				$c->close();
				while($registro = mysqli_fetch_assoc($resultado)) {
					$serie = new Serie();
					$serie->setIdTVShow($registro['idTVShow']);
					$c2 = $this->conectar();
					$query2 = "select * from TVShow where idTVShow = {$serie->getIdTVShow()}";
					$resultado2 = $c2->query($query2);
					$c2->close();
					while($registro2 = mysqli_fetch_assoc($resultado2)) {
						$serie = new Serie();
						$serie->setIdTVShow($registro2['idTVShow']);
						$serie->setName($registro2['name']);
						$serie->setSeason($registro2['season']);
						$serie->setActive($registro['rating']);\
						array_push($series, $serie);
					}
				}
				$resultado->close();
			}catch(Exception $ex){
				echo $ex->getFile().' : '.$ex->getLine().' : '.$ex->getMessage();
			}
			return $series;
		}

		function listarWatchList($user){
			$series = array();
			try{
				$c = $this->conectar();
				$query = "select * from User_TVShow where idUser = {$user->getIdUser()} AND watchList = 1";
				$resultado = $c->query($query);
				$c->close();
				while($registro = mysqli_fetch_assoc($resultado)) {
					$serie = new Serie();
					$serie->setIdTVShow($registro['idTVShow']);
					$c2 = $this->conectar();
					$query2 = "select * from TVShow where idTVShow = {$serie->getIdTVShow()}";
					$resultado2 = $c2->query($query2);
					$c2->close();
					while($registro2 = mysqli_fetch_assoc($resultado2)) {
						$serie = new Serie();
						$serie->setIdTVShow($registro2['idTVShow']);
						$serie->setName($registro2['name']);
						$serie->setSeason($registro2['season']);
						array_push($series, $serie);
					}
				}
				$resultado->close();
			}catch(Exception $ex){
				echo $ex->getFile().' : '.$ex->getLine().' : '.$ex->getMessage();
			}
			return $series;
		}

	}

?>
