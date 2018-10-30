<?php

	class Filme{
		private $idMovie;
		private $name;
		private $releaseYear;
		private $runningTime;
		private $genre;
		private $director;
		private $studio;

		function __construct(){
			$this->setIdMovie(0);
			$this->setName("");
			$this->setReleaseYear(2000);
			$this->setRunningTime(120);
			$this->setGenre("");
			$this->setDirector("");
			$this->setStudio("");
		}

		function getIdMovie(){
			return $this->idMovie;
		}
		function setIdMovie($idMovie){
			$this->idMovie = intval($idMovie);
		}

		function getName(){
			return $this->name;
		}

		function setName($name){
			$this->name = $name;
		}

		function getReleaseYear(){
			return $this->releaseYear;
		}
		function setReleaseYear($releaseYear){
			$this->releaseYear = intval($releaseYear);
		}

		function getRunningTime(){
			return $this->runningTime;
		}
		function setRunningTime($runningTime){
			$this->runningTime = intval($runningTime);
		}

		function getGenre(){
			return $this->genre;
		}

		function setGenre($genre){
			$this->gente = $genre;
		}

		function getDirector(){
			return $this->director;
		}

		function setDirector($director){
			$this->director = $director;
		}

		function getStudio(){
			return $this->studio;
		}

		function setStudio($studio){
			$this->studio = $studio;
		}
	}
