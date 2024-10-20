<?php
// Inclua o arquivo de configuração
include 'config.php';

// Lógica para rodar o chatbot (exemplo)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Processar a entrada do usuário
    $userInput = $_POST['message'];

    // Aqui você pode chamar a função do chatbot e obter a resposta
    // $response = chatbotFunction($userInput);

    // Exibir a resposta do chatbot
    // echo json_encode(['response' => $response]);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot</title>
    <link rel="stylesheet" href="style.css"> <!-- Adicione um CSS se necessário -->
</head>

<body>
    <div id="chatbox">
        <h2>Chatbot</h2>
        <form method="POST" action="">
            <input type="text" name="message" placeholder="Digite sua mensagem..." required>
            <button type="submit">Enviar</button>
        </form>
        <div id="chatlog">
            <!-- Aqui você pode exibir o log do chat -->
        </div>
    </div>

    <script src="script.js"></script> <!-- Adicione um JS se necessário -->
</body>

</html>