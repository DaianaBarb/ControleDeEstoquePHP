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
    width: 2000px;
    height: 600px;
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
 <?php 
  include 'conexao.php';
  
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



<div class="container" id="con">
  <br>
  <h3>Lista de Produtos</h3>
  
  <div id=bt1>
  <a  style="width: 80px;"href="menu.php" class="btn btn-success btn-sm">Voltar</a>
  </div>
  <br>
  
  <table class="table">

  <thead>
    <tr style="color: #6959CD; font-size: 20px;">
      <th scope="col">Categoria</th>
     
    </tr>
  </thead>
  
    
      <?php
      include 'conexao.php';
      $sql="SELECT * FROM `categoria`";
      $busca =mysqli_query($conexao,$sql);
      while($array=mysqli_fetch_array($busca)){
                      $id=$array['ID_CATEGORIA'];
                      $categoria=$array['CATEGORIA'];
                     

      
      ?>
      <tr style="font-size: 18px;">
      <td> <?php echo $categoria ?> </td>
          <td> 
        <?php
         if (($nivel==1)||($nivel==2)){

        ?>
        <a  style="color:white;"class="btn btn-warning" role="button" href="_editar_categoria.php?id=<?php echo $id ?>"><i class="far fa-edit"></i> Editar </a> 
       </td>
      
        <?php

      } 
 if($nivel==1){
      ?>
      <td>
        <a  style="color:white;"class="btn btn-danger" role="button" href="_deletar_categoria.php?id=<?php echo $id ?>"><i class="far fa-trash-alt"></i> Delete </a>
     
       <?php } 
       ?>
        </td>
          </tr>
  <?php } ?>
  
  
</table>

</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>