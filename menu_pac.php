<?php
    session_start();

    // Verifica se o usuário fez o LOGIN
    if(isset($_SESSION["acesso autorizado"]) == 1){

        echo "<center><img src=\"https://media.istockphoto.com/id/1181534622/pt/vetorial/caduceus-design.jpg?b=1&s=612x612&w=0&k=20&c=QV06JQ6RFKR19xxL1O8O-LakLhVrcPLYlOvcFAMxsTQ=\" width=200><br>";
        echo "<h2>Olá, <b>". $_SESSION["nome_pac"] ."</b></h2><br><br>";
        echo "<a href=\"listar_pac.php\">Acessar receitas</a><br><br>";
        echo "<a href=\"sair.php\">Sair</a></center>";

    } else{

        //Variavel Controle
        $controle = "";

        //Rodapé não logado
        include("rodape_nao_logado.php");

    }