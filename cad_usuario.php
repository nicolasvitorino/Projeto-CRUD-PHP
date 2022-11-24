<?php

    $nome_med = $_POST["nome_med"];
    $senha_med = $_POST["senha_med"];

    include_once("conexao.php");



        $criar_conta = mysqli_query($conexao,"insert into login_med (nome_med, senha_med) values ('$nome_med', '$senha_med');");

        header("location: index.html");

?>

