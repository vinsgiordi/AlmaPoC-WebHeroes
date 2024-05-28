<?php
session_start();
require './php/database.php'; // Include il file di connessione al database

header('Content-Type: application/json'); // Imposta l'header per il JSON

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare('SELECT * FROM users WHERE username = ?');
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Credenziali non valide']);
    }
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Richiesta non valida']);
}
?>
