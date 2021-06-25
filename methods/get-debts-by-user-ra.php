<?php 
    header("Access-Control-Allow-Origin: *");   
    header("Access-Control-Allow-Headers: Content-Type");    

    $ra = $_GET["ra"];

    require('../conexao/conexao.php');

    $sql_debts = "SELECT * from debts WHERE ra = '$ra'";

    $results = mysqli_query($conn, $sql_debts) or die("Erro ao verificar dividas!!!");
    
    $output = $results->fetch_all(MYSQLI_ASSOC);

    echo json_encode($output);
?>