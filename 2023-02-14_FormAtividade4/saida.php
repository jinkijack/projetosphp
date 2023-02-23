<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Saida</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<section>
    <table>
        <tr>
            <td>
                <?php
                    $px1 = $_GET["px1"];
                    $py1 = $_GET["py1"];
                    $qx2 = $_GET["qx2"];
                    $qy2 = $_GET["qy2"];

                    $result = sqrt(pow(($qx2-$px1), 2) + pow(($qy2-$py1),2));
                    echo "<h4>Resultado da distância entre os pontos: ". $result ."</h4>";
                ?>
            </td>
        </tr>

    </table>
</section>
</body>
</html>