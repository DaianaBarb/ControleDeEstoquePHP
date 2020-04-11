<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/9e753578ec.js" crossorigin="anonymous"></script>
	<style type="text/css">
		#card{
			color:#fff;
			background-color:#6959CD;
			box-shadow: 0px 0px 1em #666;
-webkit-box-shadow: 0px 0px 1em #666;
-moz-box-shadow: 0px 0px 1em #666; }
#container{
	margin-top: 50px;
	width: 2000px;
	height: 650px;
	padding: 25px;
	
			box-shadow: 0px 0px 1em #666;
-webkit-box-shadow: 0px 0px 1em #666;
-moz-box-shadow: 0px 0px 1em #666;
}

		
	</style>
</head>
<body style="background-color: #E6E6FA">
  <?php 
  include  'conexao.php';
 session_start();
  $usuario= $_SESSION['usuario'];
  if(!isset($_SESSION['usuario'])){
    header('Location: index.php');
  }

  $sql ="SELECT nivel FROM usuarios WHERE email='$usuario'";
  $buscar=mysqli_query($conexao,$sql);
  $array= mysqli_fetch_array($buscar);
  $nivel=$array['nivel'];
  ?>
	<div class="container" id="container">
		<br>
		<h3 style="color:#6959CD; text-align: center; margin-bottom: 30px; font-size: 36px;"> Bem-Vindo ao nosso sistema de controle de estoque <i class="fa fa-cogs" aria-hidden="true"></i></h3>
		<div class="row">
      <?php
     if(($nivel==1)||($nivel==2)){



      ?>
  <div class="col-sm-6" >
    <div class="card" id="card">
      <div class="card-body">
        <h5 class="card-title">Adicionar Produto</h5>
        <p class="card-text">Opção para adicionar produtos em nosso estoque.</p>
        <a href="_adicionar_produto.php" class="btn btn-primary">Cadastrar Produto</a>
      </div>
    </div>
  </div>
<?php } ?>
  <div class="col-sm-6">
    <div class="card"id="card">
      <div class="card-body">
        <h5 class="card-title">Lista de Produtos</h5>
        <p class="card-text">Vizualizar, editar e excluir os produtos.</p>
        <a href="_listar_produtos.php" class="btn btn-primary" style="width:150px;">Produtos</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6" style="margin-top: 10px;">
    <div class="card" id="card">
      <div class="card-body">
        <h5 class="card-title">Adicionar Categoria</h5>
        <p class="card-text">Adicionar Categoria ao nosso estoque.</p>
        <a href="_adicionar_categoria.php" class="btn btn-primary" style="width:150px;">Categorias</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6" style="margin-top: 10px;">
    <div class="card" id="card">
      <div class="card-body">
        <h5 class="card-title">Adicionar Fornecedor</h5>
        <p class="card-text">Adicionar Fornecedores .</p>
        <a href="_adicionar_fornecedor.php" class="btn btn-primary" style="width:150px;">Fornecedores</a>
      </div>
    </div>
  </div>

   <div class="col-sm-6" style="margin-top: 10px;">
    <div class="card" id="card">
      <div class="card-body">
        <h5 class="card-title">Aprovar Usuarios</h5>
        <p class="card-text">Aprovar usuários cadastrados</p>
        <a href="_aprovar_usuario.php" class="btn btn-primary" style="width:150px;">Aprovar usuário</a>
      </div>
    </div>

  </div>
  <div class="col-sm-6" style="margin-top: 10px;">
    <div class="card" id="card">
      <div class="card-body">
        <h5 class="card-title">Listar Categorias </h5>
        <p class="card-text">Editar ou excluir uma categoria</p>
        <a href="_listar_categorias.php" class="btn btn-primary" style="width:150px;">Categorias</a>
      </div>
    </div>

  </div>

</div>
<div style="text-align: center; padding: 20px;">
  <img src="imagem/estoque.png">
</div>
	</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>