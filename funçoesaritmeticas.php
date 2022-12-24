<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="_css/estilo.css">
        <title>funcoes aritmeticas</title>
        <style>
            h2 {
                font: ariel;
                font-color
            }
        </style>
    </head>
    <body>
        <div>
        <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $m = ($n1 + $n2) / 2;
        echo "<h2>Valores Recebidos: $n1 e $n2<h2/>";
        echo "A soma vale ". ($n1+$n2);
        echo "<br/>A subtraçao vale ". ($n1-$n2);
        echo "<br/>A mutiplicacao vale ". ($n1*$n2);
        echo "<br/>A divisao vale ". ($n1/$n2);
        echo "<br/>A modulo vale ". ($n1%$n2);
        echo "<br/>A media vale ". ($n1%$n2);
        ?>
    </div>    
    </body>
    
</html>