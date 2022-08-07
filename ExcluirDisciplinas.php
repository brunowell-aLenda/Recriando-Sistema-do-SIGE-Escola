<!-- EXCLUIR A DISCIPLINA E LISTADO NA PAGINA DO PROFESSOR -->





<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Excluir Disciplinas</title>
</head>
<body>

	<?php
	
	require_once 'conexao.php';
		$codigoDis = $_GET['id'];
	     

		$sql1 = "SELECT * FROM NOTAS WHERE DISCIPLINAS_CODIGO = $codigoDis";
		$r = mysqli_query($con, $sql1);
		
		
		
	if(mysqli_num_rows($r) > 0){
		$sql_deletar_notas = "DELETE FROM NOTAS WHERE DISCIPLINAS_CODIGO = $codigoDis";
		$sql_deletar_disciplinas = "DELETE FROM DISCIPLINAS WHERE CODIGO = $codigoDis";
		mysqli_query($con, $sql_deletar_notas);
		mysqli_query($con, $sql_deletar_disciplinas);
		
		
		
		header('Location:disciplinas.php');}
		
		?>
		
		
		
		
	

</body>
</html>