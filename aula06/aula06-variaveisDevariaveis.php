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
        $x = "abc";
#variavel abaixo vai receber o nome do conteudo da variavel acima > que ira receber o conteuno "def"
        $$x = "def";
        echo "O conteudo da variavel X e $x";
        echo "<br/>A variavel ABC criada recebeu o valor $abc";
    ?>
</div>
</body>
</html>
