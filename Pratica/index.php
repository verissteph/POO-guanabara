<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - POO</title>
</head>

<body>
    <?php
    require_once("Caneta.php");
    $c1 = new Caneta;
    $c1->cor = "Azul";
    $c1->ponta = 0.5;
    $c1->destampar();
    //print_r($c1);

    $c2 = new Caneta;
    $c2->cor = "Vermelha";
    $c2->carga = 50;
    $c2->tampar();
    //print_r($c2);


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
</body>

</html>