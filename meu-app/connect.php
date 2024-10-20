<?php
$servername = "mysql"; // Nome do serviço MySQL
$username = "root"; // Nome de usuário do MySQL
$password = "123"; // A senha que você definiu
$dbname = "seu_banco_de_dados"; // O banco de dados que você definiu

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
echo "Conectado com sucesso";
