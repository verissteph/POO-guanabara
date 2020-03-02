<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula POO</title>
</head>

<body>
    <pre>
    <h1>ULTRA EMOJI COMBAT</h1>
    <?php
    require_once 'Lutador.php';
    require_once 'Luta.php';
    $l=[];
    $l[0] = new Lutador("Pretty Boy", "França",1.75, 68.9,31, 11, 2, 1);
    $l[1]= new Lutador("Putscript","Brasil",1.68,57.8,29,14,2,3);
    $l[2]= new Lutador("SnapShadow","EUA",1.65,80.9,35,12,2,1);
    $l[3]= new Lutador("Dead Code","Austrália","1.93","81.6",28,13,0,2);
    $l[4]= new Lutador("UFOCobol","Brasil",1.70,119.3,37,5,4,3);
    $l[5]= new Lutador("Nerdaart","EUA",1.81,105.7,30,12,2,4);

    $uec01= new Luta();
    $uec01->marcarLuta($l[2],$l[3]);
    $uec01->lutar();

    // $l[3]->perderLuta();
    // $l[3]->apresentar();
    // $l[3]->status();



    ?>
    </pre>
</body>

</html>