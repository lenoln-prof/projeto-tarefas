<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tarefas</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<main class="container">
    <h1>Minhas tarefas</h1>
    <p><a class="botao" href="criar.php">Nova tarefa</a></p>

    <?php if (count($tarefas) === 0): ?>
    <p>Nenhuma tarefa cadastrada.</p>
    <?php else: ?>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Descrição</th>
            <th>Status</th>
            <th>Criada em</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($tarefas as $t): ?>
        <tr>
            <td><?= $t['id'] ?></td>
            <td><?= htmlspecialchars($t['titulo'], ENT_QUOTES, 'UTF-8') ?></td>
            <td><?= htmlspecialchars($t['descricao'] ?? '', ENT_QUOTES, 'UTF-8') ?></td>
            <td><?= $rotulos[$t['status']] ?? $t['status'] ?></td>
            <td><?= date('d/m/Y H:i', strtotime($t['criada_em'])) ?></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php endif; ?>
</main>
</body>
</html>