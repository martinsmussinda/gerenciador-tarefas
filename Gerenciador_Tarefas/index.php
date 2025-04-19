<?php
// Incluindo o arquivo de conexão
include('db.php');

// Buscar todas as tarefas
$stmt = $pdo->query("SELECT * FROM tarefas");
$tarefas = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerenciador de Tarefas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Gerenciador de Tarefas</h1>
    
    <form action="add_task.php" method="POST">
        <input type="text" name="title" placeholder="Adicionar nova tarefa" required>
        <button type="submit">Adicionar</button>
    </form>
    
    <ul>
        <?php foreach ($tarefas as $tarefa): ?>
            <li>
                <?= htmlspecialchars($tarefa['title']) ?> 
                <?php if ($tarefa['is_done']): ?>
                    (Concluída)
                <?php else: ?>
                    <a href="update_task.php?id=<?= $tarefa['id'] ?>&status=1">Concluir</a>
                <?php endif; ?>
                <a href="delete_task.php?id=<?= $tarefa['id'] ?>">Excluir</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
