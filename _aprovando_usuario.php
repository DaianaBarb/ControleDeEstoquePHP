<?php
include 'conexao.php';
$id=$_GET['id'];
$nivel=$_GET['nivel'];
if( $nivel == 1){
	 $sql="UPDATE usuarios SET status='Ativo', nivel=1 WHERE id_usuario = $id";
	 $atualização=mysqli_query($conexao,$sql);
	 echo " administrador aprovado";

}
if( $nivel == 2){
	 $sql="UPDATE usuarios SET status='Ativo', nivel=2 
	  WHERE id_usuario = $id";
	  $atualização=mysqli_query($conexao,$sql);
	  echo " funcionario aprovado";

}
if( $nivel == 3){
	 $sql="UPDATE usuarios SET status='Ativo', nivel=3 
	 WHERE id_usuario = $id";
	  $atualização=mysqli_query($conexao,$sql);
	  echo " Conferente aprovado";

}

?>