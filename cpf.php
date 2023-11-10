
<!DOCTYPE html>
<html lang="pt-br">

    <title>Bg_lpr</title>
		
</head>
 <form action="cpf.php" method="GET">
		<label>Nome ou Matricula </label>
		<input type="text" name="nome1" size="50" placeholder="Insira o nome">
		<button style="width:100px;">Buscar</button>
	</form>
 
<div>
<table>

<?php

$nome = "%".trim($_GET['nome1'])."%";

$servername = "10.41.19.85";
$username = "new";
$password = "teltronic";
$banco ="bdefetivo";
// Create connection
 
$conexao= mysqli_connect($servername, $username, $password,$banco);
            //Chamando conexão com o arquivo de conexao.php
              //include ("conn/conexao.php");
            //
       $buscar="SELECT * FROM adm_efetivo WHERE nome like'$nome' or matricula like'$nome'";
              $msg = mysqli_query($conexao, $buscar) or die("Ocorreu um erro");
              echo "
                <table align='center' border='1px' width='600px' cellspacing='0'>
                  <tr>
                    <td>ID</td>
                    <td>Nome</td>  
                     <td>Cpf</td>  
					     <td>Matricula</td> 
                  </tr> ";
              $cont=0;
              while ($linha=mysqli_fetch_array($msg)){
                 
              echo "
                <tr color='white'>
                  <td>".$linha["id"]."</td>    
                  <td>".$linha["nome"]."</td>          
                   <td>".$linha["cpf"]."</td> 
				   <td>".$linha["matricula"]."</td> 
                </tr>
              ";
             
              }  
              echo "</table>"; 
    		  ?>

</div>