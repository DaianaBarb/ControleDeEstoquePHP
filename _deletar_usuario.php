<?php
include 'conexao.php';
 $id=$_GET['id'];
$sql="DELETE FROM usuarios where id_usuario=$id";

$deletar=mysqli_query($conexao,$sql);

header("location: _aprovar_usuario.php"); // redireciona para a pg de aprovacao

?>