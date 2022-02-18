<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par E Impar</title>
    <link rel="stylesheet" href="../css/body.css">
</head>
<body>
    <form name="ParEImpar" method="post" action="parEImpar.php">
    <div class="container">
        <h3>Par e Impar</h3>
        <hr>
        <br>

        <label for="inicio">N° inicial</label>
       <select name="number1" id="">
       <option value="">selecione um numero inicial</option>
    <?php

    //declarando valores dentro do select
    /*$inicio ;
    while($inicio <= 500){
    echo "<option value='".$inicio."'>".$inicio."</option>";
    $inicio = $inicio +1;
    }*/
    ?>
       </select>

        <label for="fim">N° final</label>
        <select name="number2" id="">
        <select name="segundoNumero" id="" value="<$inicio>">
    <option value="">selecione um numero final</option>
    <?php
    //declarando valores dentro do select
    /**$fim;
    while($fim <= 1000){
    echo "<option value='".$fim."'>".$fim."</option>";
    $fim = $fim +1;
    }
    */
    ?>

        </select>
        <br><br>

        <input type="submit" name="btnCalc" value="Calcular">

        <div id="Pares">
        </div>
        <div id="numImpares">
        </div>      
    </div>
    </form>
    
</body>
</html>