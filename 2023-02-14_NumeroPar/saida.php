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
                    $numero = $_POST["numero"];
                    if($numero %2 == 0){
                        echo "<h4>O número  ". $numero ." é par</h4>";

                    }else{
                        echo "<h4>O número  ". $numero ." é ímpar</h4>";
                    }
                ?>
            </td>
        </tr>


    </table>
</section>
</body>
</html>