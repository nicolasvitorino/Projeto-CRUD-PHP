<?php

    //Variaveis
    $nome_med = $_POST["nome_med"];
    $senha_med = $_POST["senha_med"];

    //Conexao
    include_once("conexao.php");

    //Query Consulta Receitas
    $consulta_receita = mysqli_query($conexao,"SELECT COUNT(*) AS valor FROM login_med
        WHERE nome_med='$nome_med' AND senha_med='$senha_med'");
    $resultado = mysqli_fetch_all($consulta_receita, MYSQLI_ASSOC);

    //Condicao de Acesso
    if($resultado[0]["valor"] > 0){
      
        session_start();
        $_SESSION["acesso_autorizado"] = 1;
        $_SESSION["nome_med"] = $nome_med;
        header("location:menu_med.php");
    
    } else{

        echo "<center> DADOS INCORRETOS!<br><br>";
        echo "<a href=\"index.html\">Voltar</a></center>";

    } 
?>