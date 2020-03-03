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
    require_once 'Funcionario.php';
    require_once 'Aluno.php';
    require_once 'Professor.php';
    $p[0]= new Pessoa("Alana","45","F");
    $p[0]->fazerAniv();

    $p[1]= new Aluno(25896245,"PHP Iniciantes");
    $p[1]->setNome("Pedro");
    $p[1]->setIdade(14);
    $p[1]->setSexo("M");
    //$p[1]->cancelarMatr();

    $p[2]= new Professor("PHP",4000);
    $p[2]->setNome("Mariana");
    $p[2]->setIdade(52);
    $p[2]->setSexo("F");
    $p[2]->receberAum(3000);
    
    $p[3]= new Funcionario("Adm");
    $p[3]->setNome("Rickson");
    $p[3]->setIdade(36);
    $p[3]->setSexo("M");
    $p[3]->mudarTrabalho();

    print_r($p[0]);
    print_r($p[1]);
    print_r($p[2]);
    print_r($p[3]);

    

    //print_r($l[0]);
    // $l[0]->abrir();
    // $l[0]->folhear(80);
    



    ?>
    </pre>
</body>

</html>