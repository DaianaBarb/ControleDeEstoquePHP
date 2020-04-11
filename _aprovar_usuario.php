<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/9e753578ec.js" crossorigin="anonymous"></script>
  <style type="text/css">
  #con{
    margin-top: 40px;
    height: auto;
    box-shadow: 0px 0px 1em #666;
-webkit-box-shadow: 0px 0px 1em #666;
-moz-box-shadow: 0px 0px 1em #666;"
  }
 #bt1{
  text-align: right;
  margin-top: 10px;
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

</head>
<body style="background-color: #E6E6FA">
<div class="container" id="con">
  <br>
  <h3>Lista de Usuários</h3>
  
  <div id=bt1>
  <a  style="width: 80px;"href="menu.php" class="btn btn-success btn-sm">Voltar</a>
  </div>
  <br>
  
  <table class="table">

  <thead>
    <tr style="color: #6959CD; font-size: 20px;">
      <th scope="col">Usuário</th>
      <th scope="col">E-Mail</th>
      <th scope="col">Senha</th>
      <th scope="col">Nivel</th>
       <th scope="col">Status</th>
       <th scope="col">  </th>
        <th scope="col">  </th>
    </tr>
  </thead>
      <?php
      include 'conexao.php';
      $sql="SELECT * FROM `usuarios` WHERE STATUS='Inativo'";
      $busca =mysqli_query($conexao,$sql);
      while($array=mysqli_fetch_array($busca)){
                      $id=$array['id_usuario'];
                      $nome=$array['nome'];
                      $mail =$array['email'];
                      $senha=$array['senha'];
                      $nivel =$array['nivel'];
                      $status =$array['status'];

      
      ?>
      <tr style="font-size: 18px;">
      <td> <?php echo $nome ?> </td>
      <td> <?php echo $mail ?> </td>
      <td> <?php echo $senha ?> </td>
      <td> <?php echo $status?> </td>
      <td> 
        <a  style="color:white;"class="btn btn-warning btn-sm" role="button" href="_aprovando_usuario.php?id=<?php echo $id ?>&nivel=1"><i class="far fa-smile-beam"></i> Administrador </a> 
        <a  style="color:white;"class="btn btn-success btn-sm" role="button" href="_aprovando_usuario.php?id=<?php echo $id ?>&nivel=2"><i class="far fa-smile-beam"></i> Funcionário </a> 
        <a  style="color:white;"class="btn btn-dark btn-sm" role="button" href="_aprovando_usuario.php?id=<?php echo $id ?>&nivel=3"><i class="far fa-smile-beam"></i> Conferente </a> 
      </td>
      <td> 
        <a  style="color:white;"class="btn btn-danger" role="button" href="_deletar_usuario.php?id=<?php echo $id?> &nivel=<?php echo $nivel ?>"><i class="far fa-trash-alt"></i> Excluir </a>
      </td>
  <?php } ?>
    </tr>
  
</table>

</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>