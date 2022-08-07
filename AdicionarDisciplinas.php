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


include_once 'conexao.php';





session_start();

if($_SESSION['nome']){
	echo " Bem Vindo " . $_SESSION['nome'];
}else{
	header('Location:index.php');
}
	
	
	
	if(                 isset($_POST['codigo']) && isset($_POST['nome'])                  ){
		$codigo = $_POST['codigo'];
		$nome = $_POST['nome'];
		
		
		
		
		$sqlAluno = "INSERT INTO DISCIPLINAS(NOME) VALUES ('$nome')";
		mysqli_query($con, $sqlAluno);
		
		$codigo = "SELECT CODIGO FROM DISCIPLINAS WHERE CODIGO = $codigo ";
		$cod = mysqli_query($con, $codigo);
		
		
		
		//$sqlQtd = "SELECT COUNT(NOME) FROM DISCIPLINAS" ;
		//$qtd = mysqli_query($con, $sqlQtd);
		
		
		
		//for($i = 1; $i <= 6; $i++){
			//$sqlNotas = "INSERT INTO NOTAS(MEDIA_BIMESTRAL, DISCIPLINAS_CODIGO, CODIGO_USUARIO) VALUES (0, $i, $cod)"; 
			//mysqli_query($con, $sqlNotas );
			
			
			
			
		} 

		

		
		
	//}
	




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
 <li style="position:absolute; left: 1px; top: 600px;"><a href="disciplinas.php">Voltar A Página de Disciplinas </a> </li>
 </ul>
</div>


</div>
</div>






<form action="AdicionarDisciplinas.php" method="POST" >

			
			<table border="2px" style="position:absolute; left: 280px; top: 200px;" bordercolor="#009966">
    	<tr>
        	<td align="center">CODIGO</td>
            <td align="center">DISCIPLINA</td>
                   
            
          </tr> 
                
                 <tr>
			<td> <input readonly type="text" id="codigo" name="codigo"/>    </td>
            <td> <input   type="text" id="nome" name="nome"/>        </td>
            
		</tr>
           
            <input type="submit" value="CADASTRAR" style="position:absolute; left: 380px; top: 600px;"> </td>
         
		
        
</form>



	
<footer>
	<p>© 2017 - Padre João Bosco de Lima - Todos os direitos reservados</p>
</footer>
</main>
</body>
</html>