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
        $variavel_legal=randomizar();

        for($i = 0; $i < count($variavel_legal); $i++){
            echo $variavel_legal[$i]." ";
        }

        function randomizar(){
            for($i = 0; $i <= rand(1,10); $i++){
                $array[]=rand(1,10);
            }
            return $array;
        }
    ?>
</body>
</html>