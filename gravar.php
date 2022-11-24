<?php
include("conexao.php");

        //Variáveis
        $controle = $_POST["controle"];
        $nome_med= $_POST["nome_med"];
        $crm= $_POST["crm"];
        $nome_pac= $_POST["nome_pac"];
        $endereco= $_POST["endereco"];
        $prescricao= $_POST["prescricao"];




        echo $controle;
        
        mysqli_query($conexao,"insert into receitas (nome_med,crm,nome_pac,endereco,prescricao) VALUES('$nome_med','$crm','$nome_pac','$endereco','$prescricao')");


        

header("location: listar_medico.php");
?>