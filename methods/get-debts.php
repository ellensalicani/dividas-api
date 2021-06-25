<?php 
    header("Access-Control-Allow-Origin: *");   
    header("Access-Control-Allow-Headers: Content-Type");    

    require('../conexao/conexao.php');

    $sql_debts = "SELECT * from debts";

    $result = mysqli_query($conn, $sql_debts) or die("Erro ao verificar dividas!!!");

    if(mysqli_num_rows($result) == 0) echo "Falha";
    else echo "Sucesso";

?>