-- Criar o banco de dados
CREATE DATABASE IF NOT EXISTS task_manager;
USE task_manager;

-- Criar a tabela de tarefas
CREATE TABLE IF NOT EXISTS tarefas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    is_done BOOLEAN DEFAULT 0
);
