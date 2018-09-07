	<?php 

	require_once("config.php");

	/*$sql = new Sql();

	$usuarios = $sql->select("SELECT * FROM tb_usuarios");

	echo json_encode($usuarios);*/

	// ^^^^ NAO USADO MAIS DEPOIS DE CRIADO A CLASSE USUARIO

	$jose = new Usuario();

	$jose->loadbyId(4);

	echo $jose;

	 ?>

