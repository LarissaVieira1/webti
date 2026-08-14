<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 2</title>
</head>
<body>
    <?php 
    $nome = "Felipe wanderherz";
    $idade = 19;
    $nota = 10;
    $aprovado = true;

    echo "Nome: $nome<br>";
    echo "Idade: $idade anos<br>";
    echo "Nota: $nota<br>";
    
    //descobrindo o tipo de cada uma

    echo "<hr>";
    echo "Nome é: " . gettype($nome) . "<br>";
    echo "Idade é: " . gettype($idade) . "<br>";
    echo "Nota é: " . gettype($nota) . "<br>";
    echo "Aprovado é: " . gettype($aprovado) . "<br>";
    ?>
</body>
</html>