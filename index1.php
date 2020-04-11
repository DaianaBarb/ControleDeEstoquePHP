<?php
include 'conexao.php';

$usu=$_POST['usuario'];
$senhausu=$_POST['senha'];

$sql="SELECT email,senha FROM usuarios WHERE email='$usu'";
$buscar =mysqli_query($conexao,$sql);

$total= mysqli_num_rows($buscar); 
//veriica quantas linhas tem com o email inserido
while($array=mysqli_fetch_array($buscar)){
   $senha=$array['senha'];
  $senhacriptografada = md5($senhausu);
}
if($total>0){
 if($senhacriptografada==$senha){
 	session_start();
 	$_SESSION['usuario']=$usu;
 	header('Location: menu.php');
 } else{header('Location: erro.php');}

} else {
	header('Location: erro.php');
	
}



?>