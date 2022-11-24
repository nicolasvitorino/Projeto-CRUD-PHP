<?php

    //Variaveis
    $nome_pac = $_POST["nome_pac"];
    $senha_pac = $_POST["senha_pac"];

    //Conexao
    include_once("conexao.php");

    //Query Consulta Receitas
    $consulta_receita = mysqli_query($conexao,"SELECT COUNT(*) AS valor FROM login_pac
        WHERE nome_pac='$nome_pac' AND senha_pac='$senha_pac'");
    $resultado = mysqli_fetch_all($consulta_receita, MYSQLI_ASSOC);

    //Condicao de Acesso
    if($resultado[0]["valor"] > 0){
      
        session_start();
        $_SESSION["acesso autorizado"] = 1;
        $_SESSION["nome_pac"] = $nome_pac;
        header("location:menu_pac.php");
    
    } else{

        echo "<center> DADOS INCORRETOS!<br><br>";
        echo "<a href=\"index.html\">Voltar</a></center>";

    } 
?>