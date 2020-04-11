<?php
include 'conexao.php';
$id= $_POST['id'];
$nome= $_POST['nome'];
$categoria= $_POST['categoria'];
$quantidade= $_POST['quantidade'];
$fornecedor= $_POST['fornecedor'];
//$numero= $_POST['numero'];

 $sql="UPDATE `estoque` SET `NOME_PRODUTO`='$nome',`CATEGORIA_PRODUTO`='$categoria',`QUANTIDADE_PRODUTO`=$quantidade,`FORNECEDOR`='$fornecedor' WHERE id_estoque=$id";
 $atualizar=mysqli_query($conexao,$sql);

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container" style="width: 400px;">
	<center>
		<h3> Atualizado com Sucesso!!</h3>
		<a class="btn btn-sm btn-warning" style="color: #fff;" href="menu.php">Voltar</a>
	</center>
</div>