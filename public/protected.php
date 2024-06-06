<?php
session_start();

// Funzione per verificare l'autenticazione tramite REST API
function isAuthenticated() {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://webheroes.local/api/check_auth.php');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_COOKIE, 'PHPSESSID=' . session_id()); // Passa il cookie della sessione

    $response = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($response, true);
    return $data['status'] === 'success';
}

// Verifica la sessione e l'autenticazione
if (!isset($_SESSION['user_id']) || !isAuthenticated()) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protected Page</title>
    <link rel="stylesheet" href="dist/main.css">
</head>
<body>
    <h1>Protected Content</h1>
    <p>This content is protected and only visible to authenticated users.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
