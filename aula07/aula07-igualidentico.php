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
       $a = 3;
       $b = "3";
       $r = ($a === $b)?"SIM":"NAO"; #se fosse "==" a e b iriam ser considerados iguais mesmo sendo de tipos diferentes
#para testar se é o mesmo valor e o mesmo tipo basta adicionar mais um sinal de igualdade
       echo "As variaveis A e B sao identicas? $r";
    ?>
</div>
</body>
</html>
