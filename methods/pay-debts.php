<?php 
    header("Access-Control-Allow-Origin: *");   
    header("Access-Control-Allow-Headers: Content-Type");    

    $id = $_GET['id'];

    require('../conexao/conexao.php');

    $sql_login = "UPDATE debts SET is_paid = 1 where id = $id";

    $result = mysqli_query($conn, $sql_login) or die("Erro ao quitar divida!!!");

    // $output = $results->fetch_all(MYSQLI_ASSOC);

    echo json_encode($result);

?>