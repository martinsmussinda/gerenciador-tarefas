<?php
// Incluindo o arquivo de conexão
include('db.php');

// Verificar se o ID da tarefa foi passado
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Deletar a tarefa do banco de dados
    $stmt = $pdo->prepare("DELETE FROM tarefas WHERE id = :id");
    $stmt->execute(['id' => $id]);

    // Redirecionar para a página inicial
    header('Location: index.php');
    exit;
}
?>
