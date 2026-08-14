<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 3</title>
</head>
<body>
    <?php 
    $nota = 7;
    
    if($nota >= 9){
        echo "Conceito A . Excelente";
    }elseif($nota >= 7){
        echo "Conceito B . Bom";
    }elseif($nota >= 6){
        echo "Conceito C . Suficiente";
    }else{
        echo "Conceito D . Insuficiente";
    }

    ?>
    
</body>
</html>