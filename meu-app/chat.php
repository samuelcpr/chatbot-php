<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userMessage = $_POST['message'] ?? '';

    if ($userMessage) {
        $response = sendMessageToChatGPT($userMessage);

        if (isset($response['choices'][0]['message']['content'])) {
            echo json_encode(['response' => $response['choices'][0]['message']['content']]);
        } else {
            echo json_encode(['response' => 'Desculpe, não consegui entender a sua mensagem.']);
        }
    }
}
