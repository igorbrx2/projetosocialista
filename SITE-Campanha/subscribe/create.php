<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $fullname = isset($_POST['fullname']) ? trim($_POST['fullname']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';

    // Validação básica
    if (empty($fullname) || empty($email)) {
        echo "Full Name and Email are required.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    // Cria um array com os dados
    $subscriber = [
        'fullname' => $fullname,
        'email' => $email
    ];

    // Caminho para o arquivo JSON
    $file = 'subscribes.json';

    // Se o arquivo já existir, lê seu conteúdo
    if (file_exists($file)) {
        $json_data = file_get_contents($file);
        $subscribers = json_decode($json_data, true);
    } else {
        $subscribers = [];
    }

    // Adiciona o novo assinante à lista
    $subscribers[] = $subscriber;

    // Converte a lista para JSON
    $json_data = json_encode($subscribers, JSON_PRETTY_PRINT);

    // Escreve os dados no arquivo JSON
    if (file_put_contents($file, $json_data)) {
        //Esse é o local do redirecionamento
        header("Location: /form.html");
    } else {
        echo "Error saving subscription.";
    }
} else {
    echo "Invalid request method.";
}
?>
