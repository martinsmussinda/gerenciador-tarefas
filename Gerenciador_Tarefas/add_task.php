<?php
// Incluindo o arquivo de conexão
include('db.php');

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];

    // Inserir a tarefa no banco de dados
    $stmt = $pdo->prepare("INSERT INTO tarefas (title) VALUES (:title)");
    $stmt->execute(['title' => $title]);

    // Redirecionar para a página inicial
    header('Location: index.php');
    exit;
}
?>
