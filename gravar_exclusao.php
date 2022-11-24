<?php

    require("conexao.php");
    
    foreach($_POST as $campos){
        mysqli_query($conexao, "delete from receitas where id_receita=$campos");

    }

    header("location: listar_medico.php");





?>