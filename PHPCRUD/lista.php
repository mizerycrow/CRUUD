<?php
require 'conectar.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM usuario.usuario_site");
if ($sql->rowCount()>0) {
	$lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>

<html lang="pt-br">
<link rel="stylesheet" href="style.css">

<head>

<meta charset="utf-8"/>

<title>Cadastro Dividas</title>

</head>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<hr>
<div class="container bootstrap snippets bootdey">
    <div class="row">
        <div class="col-lg-12">
            <div class="main-box no-header clearfix">
                <div class="main-box-body clearfix">
                    <div class="table-responsive">
                        <table class="table user-list">
                            <thead>
                                <tr>
                                <th><span>user_id</span></th>
                                <th><span>email</span></th>
                                <th><span>usuario</span></th>
                                <th><span>senha</span></th>
								<th><span>ações</span></th>
                                <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                
									<?php foreach ($lista as $user): ?>
									
									<td><?=$user['Id'];?></td>
									<td><?=$user['email'];?></td>
            						<td><?=$user['usuario'];?></td>
									<td><?=$user['senha'];?></td>
									
									<td style="width: 20%;">
										<a href="edit.php?Id=<?=$user['Id'];?>" class="table-link text-info">
										<span class="fa-stack">
                                                <i class="fa fa-square fa-stack-2x"></i>
                                                <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                            </span>
										</a>
										<a href="excluir.php?Id=<?=$user['Id'];?>" class="table-link danger">
                                            <span class="fa-stack">
                                                <i class="fa fa-square fa-stack-2x"></i>
                                                <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                            </span>
                                        </a>
									</td>


							
									
										

									<?php endforeach; ?>
									
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<a href="registro.php" class="retornar">Cadastrar Usuários</a>




</html>