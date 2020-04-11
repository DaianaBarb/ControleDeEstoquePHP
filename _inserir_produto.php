<?php
include'conexao.php'; //incluindo outra pagina php

$NumeroProduto=addslashes($_POST['numero']); //recebe o valor do atributo e nao aceitar aspas simples no banco
htmlspecialchars($NumeroProduto); // nao aceitar javascrit
$NomeProduto=htmlspecialchars($_POST['nome']);
$CategoriaProduto=$_POST['categoria'];
$Fornecedor=$_POST['fornecedor'];
$Quantidade=$_POST['quantidade'];
$sql = "INSERT INTO `estoque`(`NUMERO_PRODUTO`, `NOME_PRODUTO`, `CATEGORIA_PRODUTO`, `QUANTIDADE_PRODUTO`, `FORNECEDOR`) VALUES (
$NumeroProduto,'$NomeProduto','$CategoriaProduto',$Quantidade,'$Fornecedor')";

$inserir =mysqli_query($conexao, $sql);
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container" style="width: :500px; margin-top: 20px; text-align: center;">
	<h4> Produto Adicionado com Sucesso!!</h4>
	<div style="padding-top: 20px; text-align: center;">
		<center>
<a href="_adicionar_produto.php" role="button" class="btn btn-sm btn-primary"> Cadastrar novo ítem
	
</a>
</center>
</div>
</div>