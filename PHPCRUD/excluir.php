<?php 
require 'conectar.php';

$Id = filter_input(INPUT_GET, 'Id');

if($Id){
	$sql = $pdo->prepare("DELETE FROM usuario.usuario_site WHERE Id = :Id");
		$sql->bindValue(':Id', $Id);
		$sql->execute();
}

header("location: lista.php");

?>