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
 <li style="position:absolute; left: 1px; top: 150px;"><a href="listaralunos.php">ALUNOS</a> </li>
 <li style="position:absolute; left: 1px; top: 210px;"><a href="AdicionarAlunos.php">CADASTRAR ALUNOS </a> </li>
 <li style="position:absolute; left: 1px; top: 180px;"><a href="disciplinas.php">DISCIPLINAS </a></li>
 </ul>
</div>


</div>
</div>



	
<footer>
	<p>© 2017 - Padre João Bosco de Lima - Todos os direitos reservados</p>
</footer>
</main>
</body>
</html>
