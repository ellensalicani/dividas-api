<?php 
    $username = $_GET['username'];
    // $password = $_POST['password'];
    
    echo "<script>alert({$username})</script>";
    
    // echo $username;

    // require('../../conexao/conexao.php');

    // $sql_login = "SELECT * from users where username = '$username' and password = '$password'";

    // mysqli_query($conn, $sql_login) or die("Erro ao verificar login!!!");
    // session_start();
    // $_SESSION['username'] = $username;

    // echo "<script>alert('Login efetuado com sucesso')</script>";
    // header("Location: ../pages/home.html");

?>