<?php
$servername = "mysql"; // Nome do serviço MySQL no Docker Compose
$username = "root"; // Nome de usuário do MySQL
$password = "123"; // A senha do MySQL
$dbname = "seu_banco_de_dados"; // O nome do banco de dados

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
echo "Conectado com sucesso";
