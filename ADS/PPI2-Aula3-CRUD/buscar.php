<?php
require "conexao.php";

$busca = $_GET["busca"] ?? "";
$sql = "SELECT id, nome, preco FROM produtos
        WHERE nome LIKE '%$busca%'";
$resultado = $conexao->query($sql);
?>

<form method="get">
  <input name="busca" value="<?= htmlspecialchars($busca) ?>">
  <button type="submit">Buscar</button>
</form>

<table>
  <tr><th>ID</th><th>Produto</th><th>Preço</th></tr>

  <?php while ($produto = $resultado->fetch_assoc()): ?>
    <tr>
      <td><?= $produto["id"] ?></td>
      <td><?= htmlspecialchars($produto["nome"]) ?></td>
      <td>R$ <?= number_format($produto["preco"], 2, ",", ".") ?></td>
    </tr>
  <?php endwhile; ?>
</table>