<?php
include 'conexao.php';
$id= $_POST['id'];
$categoria= $_POST['categoria'];
//$numero= $_POST['numero'];

 $sql="UPDATE `categoria` SET `CATEGORIA`='$categoria'WHERE ID_CATEGORIA=$id";
 $atualizar=mysqli_query($conexao,$sql);

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container" style="width: 400px;">
	<center>
		<h3> Atualizado com Sucesso!!</h3>
		<a class="btn btn-sm btn-warning" style="color: #fff;" href="menu.php">Voltar</a>
	</center>
</div>