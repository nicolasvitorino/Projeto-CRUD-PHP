<?php

    $nome_pac = $_POST["nome_pac"];
    $senha_pac = $_POST["senha_pac"];

    include_once("conexao.php");



        $criar_conta = mysqli_query($conexao,"insert into login_pac (nome_pac, senha_pac) values ('$nome_pac', '$senha_pac');");

        header("location: index.html");

?>
