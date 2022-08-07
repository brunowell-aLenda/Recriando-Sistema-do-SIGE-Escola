<!-- listar aluno na pagina do professor -->









<!DOCTYPE html> 
<html>
<head>
<title>Página do Professor</title>
<meta charset="utf-8">

<link rel="icon" href="logo.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" media="screen and (min-width: 1024px)" href="css/css do usuario/corpo.css">
<link rel="stylesheet" type="text/css" media="screen and (min-width: 0px) and (max-width: 1023px)" href="css/css do usuario/adapt.css">
	
<script type="text/javascript" src="Js/jquery.12.04.js"></script>
<script type="text/javascript" src="Js/index.js"></script>


<script src="JAVA S/jquery.js"> </script>
<script src="JAVA S/jquery-ui/jquery-ui.js"></script>
<link rel="stylesheet" href="JAVA S/jquery-ui/jquery-ui.css" >

<script>
 $(function(){
	  $("#menu").menu();
 });
</script>
<style>
.ui-menu{width:0px;       
}

</style>


</head>
<body>
    <div class="carregamento">
	<div class="estado"><img src="img/carregando.gif"></div>
</div>
<main>
 <header>
 
       <div class="top-barra">
	       <h1 > <?php

	
	if(isset($_GET['id']) == 1 ){
session_start();
session_destroy();
header('location:index.php');


}


?>

<?php





session_start();

if($_SESSION['nome']){
	echo " Bem Vindo " . $_SESSION['nome'];
	}else{
	
		header('Location:index.php');
		
		
	}
	




?> </h1>
	
    
  <div class="eeep"> </div>
  
  
    <div class="data">
     <div class="sair"> 
     <a href="usuario.php?id=1"> <img src="image de sair.jpg" ></a> </div>
     
      <img src="img/data.gif"><p id="d"></p>
      
 
     
      </div>
 </header>
  
  
   <div>
<ul id="menu">
 <li style="position:absolute; left: 1px; top: 600px;"><a href="adm.php">VOLTAR A PÁGINA DO PROFESSOR  </a> </li>
 
 </ul>
</div>



</div>
</div>


<select name="aa" id="aa">
    <option value="0">---SELECIONE A TURMA--- </option>
	<option value="1">1º INF</option>
    <option value="2">2º INF</option>
    <option value="3">3º INF</option>
   
</select>
</form>



<?php
require_once "conexao.php";

$sql = "SELECT ID,CPF,SENHA,NOME,TIPO FROM USUARIO ;";
$resultado = mysqli_query($con, $sql); 
if($resultado){
	?>
    
    
  
    
   
    
	<table border="2px" style="position:absolute; left: 150px; top: 200px;" bordercolor="#009966" >
    	<tr>
        
            <td align="center">ID</td>
            <td align="center">CPF</td>
            <td align="center">SENHA</td>
            <td align="center">NOME</td>
            <td align="center">TIPO</td>
            <td>EDITAR</td>
            <td align="center">EXCLUIR</td>
            <td align="center">ADICIONAR NOTAS</td>
            
           
            
        </tr>   
            
          
            <?php
   while($linha = mysqli_fetch_assoc($resultado)){
	     
	   ?>
        <tr>
        
            <td align="center"><?php echo $linha['ID'];?></td>
            <td align="center"><?php echo $linha['CPF']; ?></td>
            <td align="center"><?php echo $linha['SENHA'];?></td>
            <td align="center"><?php echo $linha['NOME']; ?></td>
            <td align="center"><?php echo $linha['TIPO']; ?></td>
            <td align="center"> <a href="AlterarAluno.php?id=<?php echo $linha['ID'];?>"> <img src="alterar.png"> </a>  </td>
            <td align="center"> <a href="ExcluirAluno.php?id=<?php echo $linha['ID'];?>"> <img src="lixeira.png"> </a>  </td>
            <td align="center"> <a href="AdicionarNotas.php?id=<?php echo $linha['ID'];?>"> <img src="adicionar.png"> </a>  </td>
            
            

</tr>
		<?php
		
  
  }?>
  </table>
  
   
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
