<?php

require 'Produto.php';

$produto = new Produto();
$operacao = $_GET['operacao'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    switch ($operacao) {
        case 'insert':
            $descricao = $_POST['descricao'] ?? '';
            if (!empty($descricao)) {
                $rowCount = $produto->insert($descricao);
                $message = "Inserido: " . $rowCount . " registro(s).";
                $messageClass = "success";
            } else {
                $message = "Descrição não fornecida.";
                $messageClass = "error";
            }
            break;

        case 'update':
            $id = $_POST['id'] ?? '';
            $descricao = $_POST['descricao'] ?? '';
            if (!empty($id) && !empty($descricao)) {
                $rowCount = $produto->update($descricao, (int)$id);
                $message = "Atualizado: " . $rowCount . " registro(s).";
                $messageClass = "success";
            } else {
                $message = "ID ou descrição não fornecidos.";
                $messageClass = "error";
            }
            break;

        case 'delete':
            $id = $_POST['id'] ?? '';
            if (!empty($id)) {
                $rowCount = $produto->delete((int)$id);
                $message = "Deletado: " . $rowCount . " registro(s).";
                $messageClass = "success";
            } else {
                $message = "ID não fornecido.";
                $messageClass = "error";
            }
            break;

        default:
            $message = "Operação inválida.";
            $messageClass = "error";
            break;
    }
}

$produtos = $produto->list();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gestão de Produtos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Lista de Produtos</h2>
    <ul>
        <?php foreach ($produtos as $value): ?>
            <li>Id: <?= htmlspecialchars($value["id"]) ?> - Descrição: <?= htmlspecialchars($value["descricao"]) ?></li>
        <?php endforeach; ?>
    </ul>

    <?php if (isset($message)): ?>
        <p class="message <?= htmlspecialchars($messageClass) ?>"><?= htmlspecialchars($message) ?></p>
    <?php endif; ?>

    <h2>Inserir Produto</h2>
    <form action="index.php?operacao=insert" method="post">
        Descrição: <input type="text" name="descricao" required>
        <input type="submit" value="Inserir">
    </form>

    <h2>Atualizar Produto</h2>
    <form action="index.php?operacao=update" method="post">
        Id: <input type="number" name="id" required><br>
        Nova Descrição: <input type="text" name="descricao" required>
        <input type="submit" value="Atualizar">
    </form>

    <h2>Excluir Produto</h2>
    <form action="index.php?operacao=delete" method="post">
        Id: <input type="number" name="id" required>
        <input type="submit" value="Excluir">
    </form>
</body>
</html>
