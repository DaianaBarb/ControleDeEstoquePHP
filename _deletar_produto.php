	<?php 
include("header.php");


?>
<?php
include 'conexao.php';
$id= $_GET['id'];

$sql="DELETE FROM `estoque` WHERE id_estoque=$id";
$deletar= mysqli_query($conexao,$sql);



?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container" style="width: 400px;">
	<center>
		<h3> Excluido com Sucesso!!</h3>
		<a class="btn btn-sm btn-warning" style="color: #fff;" href="_listar_produtos.php">Voltar</a>
	</center>
</div>

<?php 
include("footer.php");


?>