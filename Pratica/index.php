<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - POO</title>
</head>

<body>
<pre>
    <?php
    require_once("Caneta.php");
    $c1 = new Caneta;
    $c1->modelo = "Bic cristal";
    $c1->cor = "Azul";
    $c1->rabiscar();
    $c1->destampar();

    print_r($c1);

    // require_once "Gato.php";
    // $marola = new Gato;
    // $marola->cor = "Branca";
    // $marola->idade = 0.4;
    // $marola->raça = "Vira-Lata";
    // $marola->alimentado = true;
    // $marola->cansado = false;
    // $marola->comer();
    // $marola->brincar();
    // print_r($marola);

    // $brisa = new Gato;
    // $brisa->cor = "Preta";
    // $brisa->idade = 0.9;
    // $brisa->raça= "Vira-Lata";
    // $brisa->alimentado=false;
    // $brisa->cansado = true;
    // $brisa->brincar();
    // $brisa->comer();
    //$brisa->dormir();
    // print_r($brisa);
    ?>
    </pre>
</body>

</html>