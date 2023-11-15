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
      #pratica ano anterior
       $atual = $_GET["aa"]; # Essa linha vai pegar o ano na URL
       echo "O ano atual e $atual e o ano anterior e " . --$atual;
    ?>
</div>
</body>
</html>
