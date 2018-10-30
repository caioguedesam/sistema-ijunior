<?php

	class User{
		private $idUser;
		private $name;

		function __construct(){
			$this->setIdUser(0);
			$this->setName("");
		}

		function getIdUser(){
			return $this->idUser;
		}
		function setIdUSer($idUser){
			$this->idUser = intval($idUser);
		}

		function getName(){
			return $this->name;
		}

		function setName($name){
			$this->name = $name;
		}
	}
