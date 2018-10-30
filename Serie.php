<?php

	class Serie{
		private $idTVShow;
		private $name;
		private $season;
		private $episodes;
        private $genre;
        private $exibitionYear;
		private $creator;
        private $channel;
        private $status;

		function __construct(){
			$this->setIdTVShow(0);
			$this->setName("");
            $this->setSeason(1);
            $this->setEpisodes(24);
            $this->setGenre("");
            $this->setExibitionYear(2000);
			$this->setCreator("");
            $this->setChannel("");
            $this->setStatus(TRUE);
		}

		function getIdTVShow(){
			return $this->idTVShow;
		}
		function setIdTVShow($idTVShow){
			$this->idTVShow = intval($idTVShow);
		}

		function getName(){
			return $this->name;
		}

		function setName($name){
			$this->name = $name;
		}

		function getSeason(){
			return $this->season;
		}
        function setSeason($season){
			$this->season = intval($season);
        }
        
        function getEpisodes(){
			return $this->episodes;
		}
        function setEpisodes($episodes){
			$this->episodes = intval($episodes);
		}

		function getGenre(){
			return $this->genre;
		}

		function setGenre($genre){
			$this->genre = $genre;
        }
        
        function getExibitionYear(){
			return $this->exibitionYear;
		}
        function setExibitionYear($exibitionYear){
			$this->exibitionYear = intval($exibitionYear);
		}

		function getCreator(){
			return $this->creator;
		}

		function setCreator($creator){
			$this->creator = $creator;
		}

		function getChannel(){
			return $this->channel;
		}

		function setChannel($channel){
			$this->channel = $channel;
        }
        
        function getStatus(){
			return $this->status;
		}

		function setStatus($status){
			$this->status = boolval($status);
		}
	}
