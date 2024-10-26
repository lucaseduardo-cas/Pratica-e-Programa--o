CREATE DATABASE IF NOT EXISTS trabalho;
USE trabalho;

CREATE TABLE IF NOT EXISTS tarefas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    descricao TEXT,
    prazo DATE,
    prioridade ENUM('Baixa', 'Média', 'Alta') DEFAULT 'Baixa',
    concluida BOOLEAN DEFAULT FALSE
);
