<?php
require 'conectar.php';

$usuario = filter_input(INPUT_POST, 'usuario');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST,'senha');

if ($usuario && $email && $senha) {
	

$sql = $pdo->prepare("SELECT * FROM usuario.usuario_site WHERE email = :email");
	
	$sql->bindValue(':email', $email);
	$sql->execute();

	if ($sql->rowCount() === 0) {
		
	
$sql = $pdo->prepare("INSERT INTO usuario.usuario_site(usuario, email,senha) VALUES(:usuario, :email,:senha)");
$sql->bindValue(':usuario', $usuario);
$sql->bindValue(':email', $email);
$sql->bindvalue(':senha',$senha);
$sql->execute();

header("Location:lista.php");
exit;
}else{
	header("Location: index.php");
}

}else{
	header("Location: index.php");
exit;
}


?>