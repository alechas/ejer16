<?php

include "PHP/clases.php";

if (isset($_POST['cargar'])) 
{
	$fp = fopen("fichero.txt", "r");


	//recorro el archivo
	while (!FeoF($archivo)) 
	{
		$mi_array=str_split($renglon);
				//var_dump($mi_array);
				$cont = 0;
				foreach ($mi_array as $campo) 
				{
					$cont++;
					if ($cont) {
						# code...
					}
				}
	}	
}

?>