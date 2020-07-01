<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dados</title>
</head>
<body>
    <?php 
        $n1 = $_GET["nota1"];
        $n2 = $_GET["nota2"];
        echo "As notas foram: $n1 e $n2";
        $media= ($n1 + $n2)/2;
        if($media >=0 && $media <5){
            $situacao="REPROVADO";
        } elseif ($media>=5 && $media <7){
            $situacao = "RECUPERAÇÃO";
        } else {
            $situacao = "APROVADO";
        }
        echo"</br> A média do aluno foi: $media";
        echo "</br>A sitaução do aluno é: $situacao";
    ?>
    <div> <a href="../guanabara/exercicio03.html">Voltar</a></div>
</body>
</html>