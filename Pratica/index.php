<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula POO</title>
</head>

<body>
<pre>
    <?php
    require_once("Caneta.php");
   $c1= new Caneta();
   $c1->setModelo("BIC");
   $c1->setPonta(0.5);
   print"Eu tenho uma caneta modelo {$c1->getModelo()} com a ponta {$c1->getPonta()}";
    ?>
    </pre>
</body>

</html>