<?php

 //importando msg de erro e funções

 require_once('../modulos/msgErro.php');
 require_once('../modulos/funcoes.php');


    $num1 = (int) 0;
    $num2 = (int) 0;
    $resultado = (int) null;
    $resultado2 = (string) null;

    //Verificando se o botão foi clicado
    if(isset($_POST['btnCalc'])) {
        //Recebendo os dados do formulário
        $num1 = $_POST['txtn1'];
        $num2 = $_POST['txtn2'];

        //Validação para tratamento de caixa vazia
        if($_POST['txtn1'] == null || $_POST['txtn2'] == null) {
            echo(ERRO_MSG_CAIXA_VAZIA);
        } else {
            if(!is_numeric($num1) || !is_numeric($num2)) {
                echo(ERRO_MSG_CARACTER_INVALIDO_TEXTO);
            } else {
                if($num1 == 0) {
                    echo(ERRO_MSG_TABUADA_ZERO);
                } else {
                    for($i = 0; $i <= $num2; $i++) {
                        $resultado = operacaoMatematica($num1, $i, "MULTIPLICAR");
                        $resultado2 .= $num1 . ' X ' . $i . ' = ' . $resultado . '<br>';
                    }
                }
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <link rel="stylesheet" href="../css/body.css">

</head>
<body>

    <form name="Tabuada" method="post" action="tabuada.php">
    <div class="container">
        <h3>Tabuada</h3>
        <hr>
        <br>

        <label for="tabuada">Tabuada</label>
        <input type="text" name="txtn1" value="">
        <br><br>

        <label for="contador">Contador</label>
        <input type="text" name="txtn2" value="">
        <br><br>

        <input type="submit" name="btnCalc" value="Calcular">

        <div id="resultado"><?=$resultado2; ?></div>
    </form>  
</body>
</html>