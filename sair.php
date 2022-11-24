<?php
    session_start();
    if(isset($_SESSION["acesso_autorizado"]) == 1){

        //Destruir sessões ativas
        session_destroy();

        //Redirecionar
        header("location:index.html");

    } else{

        //Variavel Controle
        $controle = "";

        //Rodapé não logado
        include("rodape_nao_logado.php");

    }

    ?>