<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $pares = [];
        $todos_valores = [];

        for($x = 0; $x <= 10; $x++){
            if($x % 2 == 0 and $x>0){
                array_push($pares, $x);
            }
            array_push($todos_valores, $x);
        }

        echo "Array 01";
        echo '</br>';
        foreach($pares as $par){
            echo $par. "\n";
            echo '</br>';
        }

        echo "Array 02";
        echo '</br>';
        foreach($todos_valores as $valor){
            echo $valor. "\n";
            echo '</br>';
        }
    ?>
</body>
</html>