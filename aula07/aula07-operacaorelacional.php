<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
       $n1 = $_GET["a"];
       $n2 = $_GET["b"];
       $tipo = $_GET["op"]; #usuario vai ter que escolher se vai somar ou multiplicar os numeros(n1, n2)
       echo "Os valores passados foram $n1 e $n2 <br/>"; #no localhost o tipo sera s para soma ou m para multiplicaçao
       $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2; #se colocar s ele vai somar porem se colocar qualquer outra letra ele vai multiplicar pois não é uma estrutura condicional completa
       echo "O resultado sera $r";
    ?>
</div>
</body>
</html>
