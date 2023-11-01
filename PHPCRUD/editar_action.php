<?php 
require 'conectar.php';


$Id = filter_input(INPUT_POST, 'Id');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$usuario = filter_input(INPUT_POST, 'usuario');
$senha = filter_input(INPUT_POST, 'senha');

if($Id && $email && $usuario && $senha){
	$sql = $pdo->prepare("UPDATE usuario.usuario_site SET email = :email, usuario = :usuario , senha = :senha WHERE Id = :Id");
	$sql->bindValue('Id', $Id);
	$sql->bindValue(':email', $email);
    $sql->bindValue(':usuario', $usuario);
    $sql->bindValue(':senha', $senha);
	$sql->execute();


	header("Location: lista.php");
	exit;
}else{
		header("Location: lista.php");
	exit;
}