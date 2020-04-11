<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
		#bt1{
 	text-align: right;
 }
		#tamanho{
			background-color: #87CEEB;
			width: 550px;
			   padding: 20px;
		margin-top: 20px;
	
		height: 600px;
-webkit-box-shadow: 7px 3px 11px 2px rgba(0,0,0,0.37);
-moz-box-shadow: 7px 3px 11px 2px rgba(0,0,0,0.37);
box-shadow: 7px 3px 11px 2px rgba(0,0,0,0.37);
		}
		body{
background-color: #E6E6FA;
		}
	</style>
</head>
<body>
	<div style="text-align: center; padding: 10px;">
	<img src="imagem/cadastro.png">
</div>
<div class="container"id="tamanho">
	<h4>Cadastro de Usuário</h4>
	<form action="_inserte_usuario_externo.php" method="POST">
		<div class="form-group">
			<label> Nome do Usuário</label>
			<input type="text" name="nome" class=" form-control" placeholder="nome completo" required>
		</div>
			<div class="form-group">
			<label>E-mail</label>
			<input type="email" name="email" class=" form-control" placeholder="nE-mail" required>
		</div>
			<div class="form-group">
			<label>Senha do Usuário</label>
			<input type="Password" name="senha" id="senha" class=" form-control" placeholder="senha" required>
		</div>
		
			<div class="form-group">
			<label>Repetir Senha</label>
			<input type="Password" name="senha2" class=" form-control" placeholder="Repetir senha" required oninput="validasenha(this)">
			<small>Precisa ser igual a senha digitada acima.</small>
		</div>
 


		<div style="text-align: right;">
			<button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
		</div>
	</form>
	<div id="bt1">
	<a href="index.php" style="margin-top: 10px; width: 80px;"   class="btn btn-success btn-sm">Voltar</a>
</div>
<br>
</div>
<br>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
  function validasenha (input){
 if( input.value != document.getElementById('senha').value){
    input.setCustomValidity('as senhas tem que ser iguais');
 } else {
 	input.setCustomValidity('');
 }
  }
 </script>
</body>
</html>