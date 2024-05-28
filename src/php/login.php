<?php
session_start();
require_once('/database.php');

// Se l'utente è già loggato, reindirizzalo alla dashboard
if (isset($_SESSION['session_id'])) {
    header('Location: dashboard.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    // Controlla se i campi username e password sono vuoti
    if (empty($username) || empty($password)) {
        $msg = 'Inserisci username e password %s';
    } else {
        // Query per verificare l'utente nel database
        $query = "
            SELECT username, password
            FROM users
            WHERE username = :username
        ";

        $check = $pdo->prepare($query);
        $check->bindParam(':username', $username, PDO::PARAM_STR);
        $check->execute();

        $user = $check->fetch(PDO::FETCH_ASSOC);

        // Verifica se l'utente esiste e se la password è corretta
        if (!$user || !password_verify($password, $user['password'])) {
            $msg = 'Credenziali utente errate %s';
        } else {
            // Regenera l'ID della sessione per prevenire attacchi di session fixation
            session_regenerate_id();
            $_SESSION['session_id'] = session_id();
            $_SESSION['session_user'] = $user['username'];

            header('Location: dashboard.php');
            exit;
        }
    }

    printf($msg, '<a href="./index.html">torna indietro</a>');
} else {
    echo 'Metodo di richiesta non supportato.';
}
