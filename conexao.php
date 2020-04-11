<?php

$servername="localhost";//padrao
$database = "curso_estoque"; //nome do banco
$username="postgres"; //padrao root
$password="admin"; //senha banco
//create connection
$conexao=@pg_connect($servername, $username, $password, $database) or die (pg_connect_erro());

//function DBClose() {
	//@mysqli_close($conexao) or die (mysqli_error($conexao));
//}



?>