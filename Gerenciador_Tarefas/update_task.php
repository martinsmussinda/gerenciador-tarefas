<?php
// Incluindo o arquivo de conexão
include('db.php');

// Verificar se os parâmetros foram passados
if (isset($_GET['id']) && isset($_GET['status'])) {
    $id = $_GET['id'];
    $status = $_GET['status'];

    // Atualizar o status da tarefa
    $stmt = $pdo->prepare("UPDATE tarefas SET is_done = :status WHERE id = :id");
    $stmt->execute(['status' => $status, 'id' => $id]);

    // Redirecionar para a página inicial
    header('Location: index.php');
    exit;
}
?>
