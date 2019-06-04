<?php

	require_once('vendor/autoload.php');

	require_once('vendor/PHPGangsta/GoogleAuthenticator.php');

	$autenticador = new GoogleAuthenticator();

	$codigo_secreto = trim($_POST["codigosecreto"]);

	$codigo_verificador = trim($_POST["codigo"]);

	$resultado = $autenticador->verifyCode( $codigo_secreto, $codigo_verificador, 0 );

	if( $resultado ){

		echo "Tu Código es valido, te haz logueado correctamente";

	}else{

		echo "Tu Código es invalido, fallo al authenticar";

	}

?>