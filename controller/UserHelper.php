<?php
    require_once '../model/User.php';
    require_once 'UserDAO.php';
	$acao = $_GET["acao"];
	
	switch($acao){
		case 'novo':
			$banco_user = new UserDAO();
			$user = new User();
		
            //$user->setIdUser($_POST["idUser"]);
            $user->setName($_POST["name"]);

			if($banco_user->novo($user)){
				echo "<script>alert('Usuário salvo com sucesso!');</script>";
			}else{
				echo "<script>alert('Erro ao salvar o usuário!.');</script>";
			}
			echo "<script>location.href='../view/usuarios.php';</script>";
		break;
	}
?>
