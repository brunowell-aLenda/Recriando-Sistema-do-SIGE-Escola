<!DOCTYPE html>
<html>
<head>
<title>SIGE E.P</title>
<meta charset="utf-8">

<link rel="icon" href="logo.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" media="screen and (min-width: 1024px)" href="css/css do usuario/corpo.css">
<link rel="stylesheet" type="text/css" media="screen and (min-width: 0px) and (max-width: 1023px)" href="css/css do usuario/adapt.css">
	
<script type="text/javascript" src="Js/jquery.12.04.js"></script>
<script type="text/javascript" src="Js/index.js"></script>
<script type="text/javascript" src="Js/login.js"></script>

<script src="JAVA S/jquery.js"></script>
<script src="JAVA S/jquery-ui/jquery-ui.min.js"></script>
<link rel="stylesheet" href="JAVA S/jquery-ui/jquery-ui.min.css" >



<script language="javascript">
<!--  
function aumenta(obj){
    obj.height=obj.height*2;
	obj.width=obj.width*2;
}
 
function diminui(obj){
	obj.height=obj.height/2;
	obj.width=obj.width/2;
}
//--FAZ A IMAGEM CRESCER E DIMINUIR do aluno online >
</script>

<script>

/*	
	IMAGEM DO ALUNO ONLINE
	/*/	

$.fx.speeds._default = 1000;

$(function(){
	$("#dialog").dialog({
		
		width:300,
		height:200,
		modal:true,
		autoOpen: false,
		show: "scale",
		hide: "explode",
		title:"Acessar sua conta:",
		
		
	    
	/*	
	Efeitos:	
	blind,bounce,clip,drop,explode,fade,fold,highlight,puff,pulsate,scale,shake,size,slide,transfer
	/*/	
	});
		
		/*	
	IMAGEM DO ALUNO ONLINE
	/*/	
		
	$("#opener").click(function(){

		$("#dialog").dialog("open");

		return false;
	});
});
</script>

	
<script>

/*	
	CONFIRMAR USUARIO E SENHA 
	/*/	

function validaCampo()
{
if(document.cadastro.usuario.value=="")
{
alert("O CAMPO MATRÍCULA E SENHA É OBRIGATORIO!");
return false;
}

else
if(document.cadastro.senha.value=="")
{
alert("DIGITE UMA SENHA!");
return false;
}}
</script>


</head>
<body>
    <div class="carregamento">
	<div class="estado"><img src="img/carregando.gif"></div>
</div>
<main>
 <header>
       <div class="top-barra">
	       <h1>SIGE E.P</h1>
	
    
  <div class="eeep"></div>
    <div class="data">
      <img src="img/data.gif"><p id="d"></p>
      </div>
 </header>
 
 
 <center>
 <table>
 <tr>
 <td>
 <img src="ALUNO_PROF.jpg" button id="opener" width="180" height='98'  onMouseOver="aumenta(this)" onMouseOut="diminui(this)">
</td>
</tr>

<tr>
<td>

<h3 align="center"> <font color="#009900">Aluno e Professor Online </font> </h3>

</td>

</tr>
</table>
</center>

 <a href="index.php?id=1"> 
 
 <div id="dialog"> 
 
 
 

 </a>

 



<form name="cadastro"  action="index.php" method="POST" onSubmit="return validaCampo(); return false;">
<label>Matrícula:</label><br>
<input type="text" name="usuario" id="usuario" placeholder="Digite o CPF"><br>
<label>Senha:</label><br>
<input type="password" name="senha" id="senha"></br>

<input type="submit" value="Entrar" >
 
</form> 




<?php

include_once "conexao.php";
//isset verifica se algum campo esta em branco
// ! --> e para dentro do if  
if(isset($_POST['usuario']) && isset($_POST['senha'])){
	
	$usuario = $_POST['usuario'];
	$senha =   $_POST['senha'];
	

	
	$sql = "SELECT * FROM USUARIO WHERE CPF = '$usuario' AND SENHA = '$senha' ";
	$result = mysqli_query($con, $sql);
	 
	 if (mysqli_num_rows($result) > 0) {
		  
		  $dados = mysqli_fetch_assoc($result);
		  $nome =  $dados['NOME'];
		  $tipo =  $dados['TIPO'];
		  $codigo = $dados['ID'];
		  




		  //inicia a sessao 
		  session_start();
		  $_SESSION["nome"] = $nome;
		    $_SESSION["codigo"] = $codigo;
		
              	 
		  if($tipo== 1){

   //header leva para outra pagina que do adm; ADM.PHP E O NOME DA OUTRA PAGINA  
   //se n for ADM leva para a pagina do usuario   
			  header('Location:adm.php');
			  
			  }
		else{
			
			header('Location:usuario.php');
			
			}
		  
		 
	}
	
}


?>


</div>
</div>


<?php
require_once "conexao.php";

$sql = "SELECT NOME,CPF,TIPO FROM USUARIO ;";
$resultado = mysqli_query($con, $sql); 
if($resultado){
	?>
    
    
  
    
    <h3 style="position:absolute; left: 360px; top: 400px;"><font color="#009900">USÚARIOS MATRICULADOS </font> </h3>
    
</div>
     <div style="overflow: auto; width: 200px; height: 200px;  position:absolute; left: 370px; top: 500px;">
     
	<table border="3px" style="position:absolute; left: 400px; top: 420px;" bordercolor="#009966" >
    	<tr>
        	<td align="center">NOME</td>
            <td align="center">MATRÍCULA</td>
        </tr>   
            
       
       
       
         
            <?php
   while($linha = mysqli_fetch_assoc($resultado)){
	     
	   ?>
        <tr>
			<td align="center"><?php echo $linha['NOME'];?></td>
            <td align="center"><?php echo $linha['CPF']; ?></td>

</tr>

		<?php
		
  
  }?>
 
 </table>
   </div>
  </center>
  <?php
}

?>

	
<footer>
	<p>© 2017 - Padre João Bosco de Lima - Todos os direitos reservados</p>
</footer>
</main>
</body>
</html>