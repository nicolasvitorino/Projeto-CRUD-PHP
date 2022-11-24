<?php
require("conexao.php");
session_start();
if(isset($_SESSION["acesso_autorizado"]) == 1)
{
   

$query=mysqli_query($conexao,"select * from receitas");
$result=mysqli_fetch_all($query, MYSQLI_ASSOC);
foreach ($result as $resultado) 
{
                $id=$resultado["id_receita"];
                    printf("<a href=\"alterar.php?id=$id\">".$resultado["nome_pac"]."</a></br>");

}
echo "<br> <br> <a href=\"menu_med.php\">Voltar</a></center>";
} else{

    //Variavel Controle
    $controle = "";

    //Rodapé não logado
    include("rodape_nao_logado.php");        

}        


?>


