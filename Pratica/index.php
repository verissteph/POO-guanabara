<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula POO</title>
</head>

<body>
    <pre>
    <h1>PROJETO CONTROLE REMOTO</h1>
    <?php
    require_once "ControleRemoto.php";
    $c=new ControleRemoto();
    $c->ligar();
    $c->maisVolume();
    $c->abrirMenu();
    ?>
    </pre>
</body>

</html>