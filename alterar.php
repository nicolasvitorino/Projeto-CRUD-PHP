<?php


session_start();


    if(isset($_SESSION["acesso_autorizado"]) == 1){

        require("conexao.php");

$id_receita = $_GET["id"];


$query= mysqli_query($conexao,"select nome_med, crm, nome_pac, endereco, prescricao from receitas where id_receita= '".$_GET["id"]."'");
$result= mysqli_fetch_all($query, MYSQLI_ASSOC);



?>
 
 
<!DOCTYPE HTML>
        

<center>

<h1>Alteração de receitas</h1>



<html>
<body>
            
<form name="formulario" method="post" action="gravar_alteracao.php">
     

<table>
        <td>
            <br>
                        <td width="100"><b>Nome completo do médico</b></td>
                        <td width="200"><input type="text" name="nome_med"  value="<?php printf($result[0]["nome_med"]);?>">
</table>
            <br>
            <br>
            <br>
<table>
        <td>
                        <td width="100"><b>CRM</b></td>
                        <td width="206"><input type="text" name="crm" value="<?php printf($result[0]["crm"]);?>"></td>    
        </td>
</table>
            <br>
            <br>
            <br>    
<table>        
        <td>
                        <td width="100"><b>Nome completo do paciente</b></td>
                        <td width="206"><input type="text" name="nome_pac" value="<?php printf($result[0]["nome_pac"]);?>"></td>    
        </td>
</table>
            <br>
            <br>
            <br>   
<table>
        <td>
                        <td width="100"><b>Endereço</b></td>
                        <td width="206"><input type="text" name="endereco" value="<?php printf($result[0]["endereco"]);?>"></td>    
        </td>
</table>        
            <br>
            <br>
            <br>  
<table>
        <td>
                        <td width="100"><b>prescricao</b></td>
                        <td width="206"><input type="textarea" name="prescricao" value="<?php printf($result[0]["prescricao"]);?>"></td>    
        </td>
            <br>   
        </td>
</table>


<table align="center">
        <td>
                        <td width="206"><input type="submit" value="Atualizar"></td>    
        </td>
            <br>   
        </td>

        <td><input type="hidden" name="id_receita" value="<?php echo $id_receita;?>"></td>
</table>

</center>

</form>
</body>
</html>


<?php
    } else{

        //Variavel Controle
        $controle = "";

        //Rodapé não logado
        include("rodape_nao_logado.php");        

    }
    
    ?>