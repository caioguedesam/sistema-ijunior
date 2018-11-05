<?php
		require_once 'User.php';
		require_once 'UserDAO.php';

	  $banco_user = new UserDAO();
	  if(isset($_POST["idUser"])){
	    $user = $banco_user->buscarPorId($_POST["idUser"]);
	  }
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>

    <form action="UserHelper.php?acao=alterar" method="post">
                
        <input type="number" name="idUser" id="idUser" value="<?php echo $user->getIdUser() ?>" readonly ><br>
        <input type="text" name="name" value="<?php echo $user->getName()?>" required><br>

        <div class="modal-footer">
        <input type="submit" value="Editar" class="btn btn-success">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
    </form>
	
</body>


</html>