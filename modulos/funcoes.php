<?php
function operacaoMatematica($numero1, $numero2, $operacao) //Não é obrigado usar um nome diferente, foi só para não confundir;
{
	//Declaração de variáveis locais da função
	$num1 = (float) $numero1;
	$num2 = (float) $numero2;
	$result = (float) 0;
	$tipoCalculo = (string) $operacao;

	switch ($tipoCalculo) {
		case "SOMAR":
			$result = $num1 + $num2;
			break;
		case "SUBTRAIR":
			$result = $num1 - $num2;
			break;
		case "MULTIPLICAR":
			$result = $num1 * $num2;
			break;
		case "DIVIDIR":
			if ($num2 == 0)
				echo (ERRO_MSG_DIVISAO_ZERO);
			else
				$result = $num1 / $num2;
			break;

		
	}

	$result = round($result, 2);

	return $result;
}

function calculoMedia($nota1, $nota2, $nota3, $nota4) {

	$media = (double) null;

	$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

	return $media;
}

?>