<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 4</title>
</head>
<body>
    <?php 
    //for: quando voce sabe quantas vezes vai repetir
    for($i = 1; $i <= 5; $i++){
        echo "Linha $i<br>";
    }

    echo "<hr>";

    //while: repete enquanto a condicao for verdadeira
    $contador = 3;
    while($contador > 0){
        echo "Faltam $contador<br>";
        $contador --;
    }

    echo "<hr>";

    echo "Tabuada do 7:<br>";
    for($i = 1; $i <=10;$i++){
        echo "7 X $i = " . (7 * $i) . "<br>";
    }
     
    ?>
</body>
</html>