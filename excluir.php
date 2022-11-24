<?php

    require("conexao.php");
    session_start();


    
    if(isset($_SESSION["acesso_autorizado"]) == 1)
    {


    
    $query = mysqli_query($conexao, "select id_receita, nome_med, crm, nome_pac, endereco, prescricao from receitas");
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

 

    echo"<form method=\"post\" action=\"gravar_exclusao.php\">";



    foreach($result as $resultado){
        $id_receita=$resultado["id_receita"];
        echo"<input type=\"checkbox\" name=\"excluir$id_receita\" value=\"$id_receita\">".$resultado["nome_pac"]."<br>";

       

    }



   echo"<input type=\"submit\" value= \"excluir\">";
echo"</form>";

echo "<br> <br> <a href=\"menu_med.php\">Voltar</a></center>";

} else{

    //Variavel Controle
    $controle = "";
    
    //Rodapé não logado
    include("rodape_nao_logado.php");        
    
    }   




?>