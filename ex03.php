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
        $numeros = conta(10,50);
        
        for($i=0; $i < count($numeros); $i++){
            echo $numeros[$i]." ";
        }

        function conta($num1,$num2){
            for($i = $num1; $i <= $num2; $i++){
                if($i %2 == 1 and $i % 7 == 0){
                    $array[] = $i;
                }
            }
            return $array;
        }
    ?>
</body>
</html>