<?php
include 'connect.php';

if (isset($_GET['updateid'])) {
    $id = $_GET['updateid'];

    $sql = "SELECT * FROM `user` WHERE id = $id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    if (!$row) {
        die("Registro não encontrado.");
    }

    $nome = $row['nome'];
    $email = $row['email'];
    $telefone = $row['telefone'];
    $senha = $row['senha'];

    if (isset($_POST['enviar'])) {
        $nome = mysqli_real_escape_string($con, $_POST['nome']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $telefone = mysqli_real_escape_string($con, $_POST['telefone']);
        $senha = mysqli_real_escape_string($con, $_POST['senha']);

        $sql = "UPDATE `user` SET nome='$nome', email='$email', telefone='$telefone', senha='$senha' WHERE id=$id";

        $result = mysqli_query($con, $sql);
        if ($result) {
            echo "Atualizado com sucesso!";
            //header('location:display.php');
        } else {
            die(mysqli_error($con));
        }
    }
} 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Crud</title>
</head>
<body>
<div class="container my-5">
    <form method="post">
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" placeholder="Digite seu nome" name="nome" >
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Ex: user@gmail.com" name="email" >
        </div>

        <div class="form-group">
            <label>Telefone</label>
            <input type="text" class="form-control" placeholder="Ex: (xx)xxxxx-xxxxx" name="telefone" >
        </div>

        <div class="form-group">
            <label>Senha</label>
            <input type="password" class="form-control" placeholder="Digite sua senha" name="senha" >
        </div>

        <button type="submit" class="btn btn-primary" name="enviar">Atualizar</button>
        <button type="submit" class="btn btn-primary" name="enviar"><a href="display.php" class="text-light">Voltar</a></button>
    </form>
</div>
</body>
</html>
