<!DOCTYPE html>
<html>
<head>
<title>Boletim</title>
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
.ui-menu{width:0px;}
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

	
	if(isset($_GET['id']) == 1){
session_start();
session_destroy();
header('location:index.php');


}


?>

<?php





session_start();

if($_SESSION['nome']){
	echo " Bem Vindo " . $_SESSION['nome'];
	$nome = $_SESSION['nome'];
	$codigo = $_SESSION['codigo'];
	}else{
	
		header('Location:index.php');
		
		
	}
	




?> </h1>
	
    
  <div class="eeep"> </div>
  
  
    <div class="data">
     <div class="sair"> <a href="usuario.php?id=1"> <img src="image de sair.jpg" ></a> </div>
     
      <img src="img/data.gif"><p id="d"></p>
      
 
     
      </div>
 </header>
 


 

 
 
 </div>
 
 <center>
 
<?php
require_once 'conexao.php';

$sql = "SELECT

DISCIPLINAS.NOME AS NOME,
NOTAS.MEDIA_BIMESTRAL AS MEDIA

FROM NOTAS

INNER JOIN DISCIPLINAS  ON NOTAS.DISCIPLINAS_CODIGO = DISCIPLINAS.CODIGO  where  NOTAS.CODIGO_USUARIO = $codigo ";  



$resultado = mysqli_query($con, $sql); 
if($resultado){
	?>
	<table border="5px" bordercolor="#009966" >
    <tr class="active">
     
     

      <td rowspan="2" colspan="4" align="center">DISCIPLINAS</td>
      <td colspan="3" align="center">RESULTADO DA APRENDIZAGEM </td>
      
                            </tr>
                            <tr class="active">
                                <td class="text-center" valign="middle" align="center" colspan="3">MÉDIA FINAL</td>
                                
                               

                              
                            </tr>
  
            <?php
   while($linha = mysqli_fetch_assoc($resultado)){
	   ?>
        <tr>
		   
    		<td colspan="4"><?php echo $linha['NOME'];?> </td>
            <td colspan="3" align="center" ><?php  if( $linha['MEDIA'] == 0){echo "-";}else{echo  $linha['MEDIA'];}?> </td> 
           
			
		</tr>
		<?php
		
  
  }?>
  </table>
  <?php
}

?>

</center>
</div>
	
<footer>
	<p>© 2017 - Padre João Bosco de Lima - Todos os direitos reservados</p>
</footer>
</main>
</body>
</html>

