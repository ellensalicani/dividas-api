<?php 
    header("Access-Control-Allow-Origin: *");   
    header("Access-Control-Allow-Headers: Content-Type");    

    require('../conexao/conexao.php');

    $sql_debts = "SELECT * from students";

    $result = mysqli_query($conn, $sql_debts) or die("Erro ao verificar alunos!!!");

    $output = $results ? $results->fetch_all(MYSQLI_ASSOC) : "Vazio";

    echo json_encode($output);

?>