<?php

include "PHP/clases.php";

if (isset($_POST['lado1'])) 
{

	$lado1 = $_POST['lado1'];
	$lado2 = $_POST['lado2'];

	if ($lado1 == ''|| $lado2 = '') 
	{
		echo "Error";
	}
	else
	{

		$rec = new Rectangulo(new Punto($lado1,$lado2),new Punto($lado2,$lado1));
		$rec::Dibujar();

	}
}

?>