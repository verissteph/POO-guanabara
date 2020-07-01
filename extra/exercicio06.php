<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>
        <?php
        $estado =isset($_GET["estado"])?$_GET["estado"]:0;
        switch ($estado) {
            case "sud":
                $regiao= "sudeste";
                break;
            case "sul":
                $regiao= "sul";
                break;
            case "ne":
                $regiao= "nordeste";
                break;
            case "nor":
                $regiao= "norte";
                break;
            case "co":
                $regiao= "centro oeste";
          }
        echo ("Está na região: $regiao");
        ?>
            </br><a href="../guanabara/exercicio06.html"></a>
    </div>
</body>

</html>