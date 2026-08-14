<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 5</title>
</head>
<body>
    <?php
    // array simples — os itens são numerados a partir do ZERO
    $cursos = ["ADS", "Redes", "Informática"];

    echo "Total: " . count($cursos) . " cursos<br>";
    echo "O primeiro é: $cursos[0]<br><hr>";

    // foreach: percorre todos os itens
    foreach ($cursos as $curso) {
    echo "- $curso<br>";
    }

    echo "<hr>";

    // array associativo — em vez de números, usamos nomes
    $aluno = [
    "nome" => "Bruno Lima",
    "curso" => "ADS",
    "nota" => 7.0
    ];

    echo $aluno["nome"] . " está em " . $aluno["curso"] . "<br><hr>";

    // percorrendo chave e valor
    foreach ($aluno as $campo => $valor) {
    echo "$campo: $valor<br>";
    }
    ?>
        
</body>
</html>