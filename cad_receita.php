<?php
    session_start();
    if(isset($_SESSION["acesso_autorizado"]) == 1){

        ?>      
        
        <head>
    <title>CADASTRO DA RECEITA</title>
<style type="text/css">


 form {
    margin: 0 auto;
    width: 400px;
    padding: 1em;
    border: 1px solid #CCC;
    border-radius: 1em;
}


form div + div {
    margin-top: 1em;
}


label {
    
    width: 90px;
    text-align: right;
}


input, textarea {
    font: 1em sans-serif;

    width: 300px;
    -moz-box-sizing: border-box;
    box-sizing: border-box;

    border: 1px solid #999;
}

textarea {
    vertical-align: top;

    height: 5em;

    resize: vertical;
}




input:focus, textarea:focus {
    
    border-color: #000;
}

.button {
   
    padding-left: 90px; 
}
button {
   
    margin-left: .5em;
}

    </style>
        <form name="cad_receita" action="gravar.php" method="post"><center>
            <label>Nome completo do médico</label><br>
            <input type="text" name="nome_med"><br><br>
            <label>CRM</label><br>
            <input type="text" name="crm"><br><br>
            <label>Nome completo do paciente</label><br>
            <input type="text" name="nome_pac"><br><br>
            <label>Endereço</label><br>
            <input type="text" name="endereco"><br><br>
            <label>Prescrição</label><br>
            <input type="textarea" name="prescricao"><br><br>
            <input type="submit" value="Salvar">&nbsp;&nbsp;
            <a href="../cr/menu_med.php">Voltar</a>
            <input type="hidden" name="controle" value="receita">
        </center></form>
        <?php
    
    } else{

        //Variavel Controle
        $controle = "";

        //Rodapé não logado
        include("rodape_nao_logado.php");        

    }
    