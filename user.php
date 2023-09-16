<?php
   
   include 'connect.php';
   if(isset($_POST['enviar'])){
    $nome= $_POST['nome'];     
    $email= $_POST['email']; 
    $telefone= $_POST['telefone'];  
    $senha= $_POST['senha']; 


    $sql=
    "insert into `user`(nome,email,telefone,senha) 
    values('$nome','$email','$telefone','$senha')";

    $result=mysqli_query($con,$sql);
    if($result){
       // echo "Dados inseridos com sucesso!";
       header('location:display.php');
    }else{
        die(mysqli_error($con));
    }

   }

?>



<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags ObrigatÃŗrias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >

    <title>Crud</title>
  </head>
  <body>

    <div class="container  my-5">

    <form method="post">

   <div class="form-group">
    <label >Nome</label>
    <input type="text" class="form-control" placeholder="Digite seu nome" name="nome" autocomplete="off">
   </div>

   <div class="form-group">
    <label >Email</label>
    <input type="email" class="form-control" placeholder="Ex: user@gmail.com " name="email" autocomplete="off">
   </div>

   <div class="form-group">
    <label >Telefone</label>
    <input type="text" class="form-control" placeholder="Ex: (xx)xxxxx-xxxxx" name="telefone" autocomplete="off">
   </div>

   <div class="form-group">
    <label >Senha</label>
    <input type="password" class="form-control" placeholder="Digite sua senha" name="senha" autocomplete="off">
   </div>

  


  <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>

</form>

    </div>

    
  </body>
</html>