<?php
    require("conexao.php");
    $id_receita = $_POST["id_receita"];
    $nome_med = $_POST["nome_med"];
    $nome_pac = $_POST["nome_pac"];
    $endereco = $_POST["endereco"];
    $prescricao = $_POST["prescricao"];
    $crm = $_POST["crm"];
    $query = mysqli_query($conexao, "update receitas set nome_med='$nome_med', nome_pac='$nome_pac', endereco= '$endereco', prescricao= '$prescricao', crm='$crm' where id_receita='$id_receita'");
   

    header ("location: listar_medico.php");
?>



