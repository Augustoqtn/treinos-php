<?php 

	$valor = readline();
	$fatorial = 1;

	for ($fatorial=1; $valor > 1; $valor--) { 
		
		$fatorial = $fatorial * $valor;
	}

	echo "O Fatorial de " . $valor . " é $fatorial";
