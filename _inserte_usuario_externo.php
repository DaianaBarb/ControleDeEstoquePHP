<?php
include 'conexao.php';
include 'password.php'; //criptografia
$nome=$_POST['nome'];
$mail = $_POST['email'];
$senha= $_POST['senha'];
$nivel=1;
$status = 'Inativo';

$sql="INSERT INTO usuarios (nome,email,senha,nivel,status) values ('$nome','$mail',md5($senha),$nivel,'$status')";

$inserir=mysqli_query($conexao,$sql);




?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container" style="width: :500px; margin-top: 20px; text-align: center;">
	<h4> Usuário Adicionado com Sucesso aguardando aprovação!!</h4>
	<div style="padding-top: 20px; text-align: center;">
		<center>
<a href="_cadastro_usuario_externo.php" role="button" class="btn btn-sm btn-primary"> Cadastrar novo Usuário
	
</a>
</center>
</div>
</div>