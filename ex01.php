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

        for($x = 1; $x <= 10; $x++){
            if($x % 2 == 0){
                array_push($pares, $x);
            }
        }
        foreach($pares as $par){
            echo $par. "\n";
            echo '</br>';
        }
    ?>
</body>
</html>