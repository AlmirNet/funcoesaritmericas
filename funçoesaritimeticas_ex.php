<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="_css/estilo.css">
        <title>funcoes aritmeticas</title>
        <style>
            h2 {
                font: 15pt Arial;
                color: # aquamarine;
            }
        </style>
    </head>
    <body>
        <div>
        <?php
        $v1 = $_GET["a"];
        $v2 = $_GET["b"];
        echo "<h2>Valores Recebidos: $v1 e $v2<h2/>";
        echo "O valor absoluto de $v2 e " . abs($v2);
         echo "<br>O valor de $v1<sup>$v2</sup> e " . pow($v1, $v2);
        echo "<br/>A raiz de $v1 e " . sqrt($v1);
        echo "<br/>O valor de $v2 arredondado e " . round($v2); //ceil  floor
        echo "<br> A parte inteira de $v2 e " . intval($v2);
        echo "<br> O valor de $v1 em moeda e R$" . number_format($v1,2,",", ".");


        ?>
    </div>    
    </body>
    
</html>