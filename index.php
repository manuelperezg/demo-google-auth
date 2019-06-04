<?php
	require_once('generador.php');
	
	// echo "<br>".$codigo_secreto."<br>";
	// echo   "<br>".$oneCode."<br>";


?>

<form action="verificador.php" method="post" autocomplete="off">
	<br>
	<input type="text"  name="codigo" placeholder="Codigo de seguridad">

	<button>Verificar</button>

	<input type="hidden" value="<?php echo $codigo_secreto; ?>" name="codigosecreto">

</form>