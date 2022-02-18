<?php

$nota1 = (double) 0;
$nota2 = (double) 0;
$nota3 = (double) 0;
$nota4 = (double) 0;
$media = (double) 0;

if(isset($_POST['bntcalc'])){

    $nota1 = $_POST['txtn1'];
    $nota2 = $_POST['txtn2'];
    $nota3 = $_POST['txtn3'];
    $nota4 = $_POST['txtn4'];


    if($_POST['txtn1'] == "" || $_POST['txtn2'] == "" || $_POST['txtn3'] == "" || $_POST['txtn4'] == "")
    {
        echo('<p class="msgEro">Verificar see toddas aas notas foram preenchidas!</p>');
    }else
    {
        if(is_numeric($nota1) || is_numeric($nota2) || is_numeric($nota3) || is_numeric($nota4)){
            echo('<p class="msgErro">Todos os valores digitados precisam ser numeros validos!</p>');
           
        }else
        {
            $media = ($nota1 + $nota2 + $nota3 + $nota4) /4;
        }

    
    }

}
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Média</title>
       <link rel="stylesheet" href="../css/body.css">
        <meta charset="utf-8">
    </head>
	<body>
    <form name="frmMedia" method="post" action="media.php">
        <div id="conteudo">
                <h3>Calculo de Médias</h3>
             <label>Nota 1:</label>
              <input type="text" name="txtn1" value="<?php echo ($nota1)?>"  > 
             <br>

             <label>Nota 2:</label>
            <input type="text" name="txtn2" value="<?php echo ($nota2)?>" > 
            <br>

            <label>Nota 3:</label>
            <input type="text" name="txtn3" value="<?php echo ($nota3)?>" > 
            <br>

            <label>Nota 4:</label>
             <input type="text" name="txtn4" value="<?php echo ($nota4)?>" >
                    <div>
                        <input type="submit" name="btncalc" value ="Calcular" >
                        <div id="botaoReset">
                            <a href="media.php">
                                Novo Cálculo
                            </a>    
                        </div>
                    </div>
                </form>

            </div>
            <footer id="resultado">
                A média é:<?php echo($media);?>
            </footer>
        </div>
        
		
	</body>

</html>