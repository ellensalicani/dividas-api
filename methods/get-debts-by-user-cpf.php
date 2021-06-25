<?php 
    header("Access-Control-Allow-Origin: *");   
    header("Access-Control-Allow-Headers: Content-Type");    

    $cpf = $_GET["cpf"];

    require('../conexao/conexao.php');

    $sql_debts = "SELECT * from debts WHERE user_cpf = $cpf";

    $results = mysqli_query($conn, $sql_debts) or die("Erro ao verificar dividas!!!");
    
    $output = $results->fetch_all(MYSQLI_ASSOC);

    echo json_encode($output);
?>