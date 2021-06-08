<?php
    $hostname = "localhost";
    $username = "root";
    $senha = "";
    $database = "unasp_dividas";

    $conn = new mysqli($hostname, $username, $senha, $database);

    if($conn->connect_error){
        die("Conexão falhou: " .$conn->connect_error);
    }
?>