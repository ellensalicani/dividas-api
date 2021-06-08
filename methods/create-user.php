<?php 
    $nome = $_POST['name'];
    $senha = $_POST['password'];
    $usuario = $_POST['username'];
    $dataNasc = $_POST['birth'];
    $sexo = $_POST['gender'];
    $email = $_POST['email'];

    $conexao = require('../../conexao/conexao.php');

    $sql_insert = "INSERT INTO users(name, password, username, birth, gender, email) 
                   values('$nome', '$senha', '$usuario', '$dataNasc', '$sexo', '$email')";

    mysqli_query($conn, $sql_insert) or die("Erro ao salvar usuario!!!");

    echo "<script>alert('Cadastrado com sucesso')</script>";
    header("Location: ../pages/login.html");
?>