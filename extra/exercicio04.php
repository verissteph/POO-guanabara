<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dados</title>
</head>

<body>
    <div>
        <?php
        $n = isset($_GET['num']) ? $_GET['num'] : 0;
        $o = isset($_GET['oper']) ? $_GET['oper'] : 1;
        switch ($o) {
            case 1:
                $r = $n*2;
                break;
            case 2:
                $r = $n ** 3;
                break;
            case 3:
                $r = sqrt($n);
                $r = number_format($r, 2);
        }
        echo "O resultado da operção solicitada é: $r ";
        ?>
            </br>
            <a class="botao" href="../guanabara/exercicio04.html">Voltar</a>
    </div>

</body>

</html>