<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $fullname = isset($_POST['fullname']) ? trim($_POST['fullname']) : '';
    $phone = isset($_POST['phone']) ? trim($_POST['phone']) : ''; // Substituído "email" por "phone"
    $occupation = isset($_POST['occupation']) ? trim($_POST['occupation']) : ''; // Adicionado campo "profissão"

    // Validação básica
    if (empty($fullname) || empty($phone)) { // Atualizado para verificar "fullname" e "phone"
        echo "Full Name and Phone are required."; // Atualizado para refletir a mudança
        exit;
    }

    // Remova quaisquer caracteres não numéricos do número de telefone
    $phone = preg_replace('/\D/', '', $phone);

    // Cria um array com os dados
    $subscriber = [
        'fullname' => $fullname,
        'phone' => $phone, // Substituído "email" por "phone"
        'occupation' => $occupation // Adicionado campo "profissão"
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
        // Esse é o local do redirecionamento
        header("Location: /form.html");
    } else {
        echo "Error saving subscription.";
    }
} else {
    echo "Invalid request method.";
}
?>
