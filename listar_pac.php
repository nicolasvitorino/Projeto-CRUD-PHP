<?php
session_start();
require("conexao.php");
$listar_pac=mysqli_query($conexao,"select * from receitas WHERE nome_pac='".$_SESSION["nome_pac"]."'");
$result=mysqli_fetch_all($listar_pac, MYSQLI_ASSOC);
foreach ($result as $resultado) 
{
    


}
?>

<!DOCTYPE html>
<meta charset="UTF-8">
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
</head>
<body>
    
    <form name="receita" action="gravar_receitas.php" method="post" ><center>
        <div>
            <label></label>
            <input type="hidden" name="id" value="<?php echo $id;?>" />

        </div>
        <div>
            <label for="nome_medico">NOME DO PACIENTE:  </label>
            <br>
            <input disabled type="text" id="nome_paciente" value="<?php printf($resultado['nome_pac']);?>">
        </div>
        <div>
            <label for="nome_paciente">NOME DO MÉDICO:  </label>
            <br>
            <input disabled type="text" id="nome_paciente" value="<?php printf($resultado['nome_med']);?>">
        </div>
        <div>
            <label for="crm">CRM:  </label>
            <br>
            <input disabled type="text" id="crm" value="<?php printf ($resultado['crm']);?>">
        </div>
        <div>
            <label for="endereco">ENDEREÇO:  </label>
            <br>
            <input disabled value="<?php printf($resultado['endereco']);?>">
        </div>
        <div>
            <label for="prescricao">PRESCRIÇÃO:  </label>
            <br>
            <textarea disabled id="prescricao"> <?php printf($resultado['prescricao']);?></textarea>
        </div>

        

</center>
    </form>





</body>