<?php
  include 'connect.php'; ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operação crud</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
</head>
<body>

<div class="container">
   <button class="btn btn-primary my-5"> <a href="user.php" class="text-light">Adiconar Usuário</a></button>
    

   <table class="table">
  <thead class="table-dark">

    <tr>
      <th scope="col">SI</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Telefone</th>
      <th scope="col">Senha</th>
      <th scope="col">Operações</th>
    </tr>
  </thead>
  <tbody>

  <?php


$sql= "Select * from `user`";
$result= mysqli_query($con,$sql);

if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $nome=$row['nome'];
        $email=$row['email'];
        $telefone=$row['telefone'];
        $senha=$row['senha'];        

        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$nome.'</td>
        <td>'.$email.'</td>
        <td>'.$telefone.'</td>
        <td>'.$senha.'</td>
        
        <td>
        <button class="btn btn-primary"><a href="atualizar.php? updateid='.$id.'" class="text-light"> Atualizar</a></button>

        <button class="btn btn-danger"><a href="deletar.php? deleteid='.$id.'" class="text-light"> Deletar 
        </a></button>
        </td>
        </tr>'
        ;
    }
    }
 ?>

 


  </tbody>
</table>
  
</table> 

</div>
    


</body>
</html>