<?php
 include 'conexao.php';
 $id= $_GET['id'];




?>
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
	#con{
		margin-top: 40px;
		width: 500px;
		height: 300px;
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
			<h4>Formulário de Cadastro</h4>
	<form  action="_atualizar_categoria.php" method="post" id="form1">

		<?php
		$sql = "SELECT * FROM `categoria` WHERE id_categoria= $id";
		$buscar =mysqli_query($conexao,$sql);
		while($array =mysqli_fetch_array($buscar)){

                      $id=$array['ID_CATEGORIA'];
                      $categoria=$array['CATEGORIA'];
                     
		
		?>
		
  
  
 	<div class="form-group">
	  
 	 </div>
 	 <div class="form-group">
	      <label>CATEGORIA</label>
         <input name="id" type="number" class="form-control" required autocomplete="off" value="<?php echo $id?>" style="display: none;">
	    <input name="categoria" value="<?php echo $categoria?>"type="text" class="form-control" required autocomplete="off">
 	 </div>
  	<button id="botao" type="submit" class="btn btn-success btn-sm" style="width: 80px;">Atualizar</button>

	</form>	
	<div id="bt1">
	<a href="menu.php" style=" width: 80px;"   class="btn btn-success btn-sm">Voltar</a>
<br>

</div>
	<?php } ?>
         </div>






<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>