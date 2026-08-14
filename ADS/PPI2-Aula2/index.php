<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu primeiro php</title>
</head>
<body>
    <h1>Larissa Vieira</h1>
    <p>Este parágrafo é um html comum!</p>

<?php

   echo "<p>Este paragrafo foi gerado pelo php<p>";
   echo "<p>Hoje é: " . date("d/m/y") . "<br>" . "Hora Atual: " . date("H:i") . "</p>";
   echo "<h2>Gaspar</h2>";
   
?>

<p>E aqui voltamos ao HTML</p>
</body>
</html>