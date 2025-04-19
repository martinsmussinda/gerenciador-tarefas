<?php
// Conexão com o banco de dados
$host = 'localhost'; // ou o host do seu servidor
$dbname = 'task_manager'; // nome do banco de dados
$username = 'root'; // seu usuário do MySQL
$password = ''; // sua senha do MySQL

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro ao conectar: " . $e->getMessage());
}
?>