<!-- recebe o alterar da pagina do professor -->

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
	       <h1 >

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
 <li style="position:absolute; left: 1px; top: 600px;"><a href="adm.php">VOLTAR AO INICIAL </a> </li>
 </ul>
</div>


</div>
</div>


<?php
include_once 'conexao.php';

$id = $_POST['id'];
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];
$nome = $_POST['nome'];
$tipo = $_POST['tipo'];





$sql = "UPDATE USUARIO SET CPF = '$cpf', SENHA = '$senha', NOME = '$nome', TIPO = $tipo  WHERE ID = $id";


$res = mysqli_query($con, $sql);

if($res){
	echo "ATUALIZAÇÃO COMPLETA";
	header('Location:adm.php');
}else{
	echo "Não ATUALIZADO";}
	
	


?>



	
<footer>
	<p>© 2017 - Padre João Bosco de Lima - Todos os direitos reservados</p>
</footer>
</main>
</body>
</html>