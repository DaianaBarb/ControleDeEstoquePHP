<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
	#con{
		margin-top: 40px;
		width: 500px;
		margin-top: 40px;
		width: 500px;
		box-shadow: 0px 0px 1em #666;
-webkit-box-shadow: 0px 0px 1em #666;
-moz-box-shadow: 0px 0px 1em #666;
	}
 #bt1{
 	text-align: right;
 }
 #form1{
 	margin-top: 20px;
 }
 #botao{
 	background-color: #ff1168;
 	color: #ffffff;
 }
</style>
</head>
<body style="background-color: #E6E6FA">
<div class="container" id="con">
	<br>
	<form action="_inserir_categoria.php" method="post">
		<h4>Cadastro de Categoria</h4>	
		<div class="form-group">
			<label>Nome da Categoria</label>
			<input type="text" name="categoria" class="form-control" placeholder="Insira o Nome da categoria" required autocomplete="off">
		</div>
    
<div id="bt1">
  	<button  style="width: 80px;" id="botao" type="submit" class="btn btn-success btn-sm">Cadastrar</button>

</div>

	</form>
	<div id="bt1">
	<a href="menu.php" style="margin-top: 10px; width: 80px;"   class="btn btn-success btn-sm">Voltar</a>
</div>
<br>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>