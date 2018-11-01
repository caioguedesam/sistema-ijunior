<?php
    require_once 'User.php';
    require_once 'UserDAO.php';
	$acao = $_GET["acao"];
	
	switch($acao){
		case 'novo':
			$banco_serie = new UserDAO();
			$user = new User();
		
            $user->setIdUSer($_POST["id"]);
            $user->setName($_POST["name"]);

			if($banco_user->novo($user)){
				echo "<script>alert('usuário salvo com sucesso!');</script>";
			}else{
				echo "<script>alert('Erro ao salvar o usuário!.');</script>";
			}
			echo "<script>location.href='registro.html';</script>";
		break;
	}
?>
