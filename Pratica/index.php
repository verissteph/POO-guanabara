<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula POO</title>
</head>

<body>
    <pre>
    <h1>Aluno,Professor e Funcionario:</h1>
    <?php
    require_once 'CPessoa.php';
    require_once 'Visitante.php';
    require_once 'Aluno.php';
    //$v1=new Visitante("Juvenal",33,"M");
    $a1=new Aluno(1111,"Informatica");
    $a1->setNome("Olavo");
    $a1->setIdade(16);
    $a1->setSexo("M");
    $a1->pagarMensalidade();

    print_r($a1);
    // $l[0]->abrir();
    // $l[0]->folhear(80);
    



    ?>
    </pre>
</body>

</html>