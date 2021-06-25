<?php 
    header("Access-Control-Allow-Origin: *");   
    header("Access-Control-Allow-Headers: Content-Type");    

    $user = $_GET['username'];
    $password = $_GET['password'];

    require('../conexao/conexao.php');

    $sql_login = "SELECT * from users where username = '$user' and pass = '$password'";

    $result = mysqli_query($conn, $sql_login) or die("Erro ao verificar login!!!");

    if(mysqli_num_rows($result) == 0) echo "Falha";    
    else {
        $transform = mysqli_fetch_object($result);
        $toJson = json_encode($transform);
        echo $toJson;
      
    }

?>