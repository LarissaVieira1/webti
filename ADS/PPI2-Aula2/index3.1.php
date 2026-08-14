<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 3</title>
</head>
<body>
    <?php 
     $num = 2;

    if($num % 2 == 0){
        echo "Par!";
    }else{
        echo "Impar!";
    }

    echo "<hr>";

    $idade = 15;

    if(($idade >=1) && ($idade <18) ){
        echo "Menor de idade!";
    }else{
        echo "Menor de idade! ";
    }

    ?>
    
</body>
</html>