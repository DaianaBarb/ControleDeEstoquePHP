<?php
include 'conexao.php';
 $id=$_GET['id'];
$sql="DELETE FROM categoria where id_categoria=$id";

$deletar=mysqli_query($conexao,$sql);

header("location: _listar_categorias.php"); // redireciona para a pg de listas de categorias

?>