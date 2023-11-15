// localhost/aula05/funcoesaritimeticas.php?x=4&y=3

<!DOCTYPE html>
<html>
<head>
 <link rel= "stylesheet" href="_css/estilo.css"/>
 <meta charset= "UTF-8"/>
 <title>Funcoes Aritmeticas em PHP</title>
 <style>
    h2{
        font: 12pt Arial;
        color: #171559;
        font-weight: bold;
    }

    </style>
</head>
<body>
<div>
    <?php
    $v1 = $_GET["x"];
    $v2 = $_GET["y"];
    echo "<h2>Valores recebidos: $v1 e $v2 </h2>";

    // valor absoluto abs()
    echo "O valor absoluto de $v2 e " . abs($v2);

    // potenciação pow(), sup vai deixar o numero elevado a
    echo "<br/>O valor de $v1<sup>$v2</sup> e " . pow($v1, $v2);

    // Raiz quadrada sqrt()
    echo "<br/>A raiz de $v1 e " .sqrt($v1);

    // Arrendondamento round()
    echo "<br/>O valor de $v2 arredondado e " . round($v2);

    // valor inteiro da variavel intval()
    echo "<br/>A parte inteira de $v2 e " . intval($v2);

    // formatação number_format()
    echo "<br/>O valor de $v1 em moeda e R$" . number_format($v1,2,",", ".");

    ?>

</div>


</body>


</html>
