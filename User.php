<?php

	class User{
		private $idUser;
		private $nameUser;

		function __construct(){
			$this->setIdUser(0);
			$this->setNameUser("");
		}

		function getIdUser(){
			return $this->idUser;
		}
		function setIdUSer($idUser){
			$this->idUser = intval($idUser);
		}

		function getNameUser(){
			return $this->name;
		}

		function setNameUser($name){
			$this->nameUser = $name;
		}
	}
