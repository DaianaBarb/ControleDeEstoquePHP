<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0, user-scalable-no"/>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
		#tamanho{
			background-color: #87CEEB;
			width: 350px;
			   padding: 20px;
		margin-top: 100px;
	text-align: center;
		height: 380px;
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
	<div class="container" id="tamanho">
		<img src="imagem/cadeado.png">
		<form action="index1.php" method="post">
			<div class="form-group" >
				<center>
				<h5>Login</h5> 
			</center> <br>
				<input style="margin-top: -15px;" type="text" name="usuario" class="form-control" placeholder=" Digite o Usuário" required>
				<br>
				<input type="password" name="senha" class="form-control" placeholder=" Digite a senha" required>
			</div>
            <div style="text-align: right;">
			<button type="submit" class="btn btn-sm btn-success" style="width: 80px;"> Entrar </button>
		</div>
		</form>
		
	</div>
	<center style="margin-top: 10px;">
	<small >Voce nao possui cadastro? Clique <a href="_cadastro_usuario_externo.php">aqui</a>  </small>
	</center>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>