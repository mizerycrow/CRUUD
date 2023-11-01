<?php 
require 'conectar.php';


$user = [];
$Id = filter_input(INPUT_GET, 'Id');
if($Id){
	$sql = $pdo->prepare("SELECT * FROM usuario.usuario_site WHERE Id = :Id");
	$sql->bindValue(':Id', $Id);
	$sql->execute();

if($sql->rowCount() > 0){
	$user = $sql->fetch(PDO::FETCH_ASSOC);

 }else{
 	header("Location: lista.php");
 	exit;
 }

}else{
	header("Location: lista.php");
}
?>

<h1>Editar Cadastro</h1>
<form method="POST" action="editar_action.php">
	<input type="hidden" name="Id" value="<?=$user['Id'];?>">
	<label>
		email:<input type="text" name="email" value="<?=$user['email'];?>"/>
	</label>
	<label>
		usuario:<input type="text" name="usuario" value="<?=$user['usuario'];?>" />
	</label>
	<label>
		senha:<input type="text" name="senha" value="<?=$user['senha'];?>"/>
	</label>
	<input type="submit" name="Atualizar"/>
</form>