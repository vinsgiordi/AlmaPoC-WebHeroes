<?php
session_start();
header('Content-Type: application/json');
require_once '../../php/database.php';

$input = json_decode(file_get_contents('php://input'), true);
$username = $input['username'] ?? '';
$password = $input['password'] ?? '';

if ($username && $password) {
    $database = new Database();
    $pdo = $database->getConnection();

    if ($pdo) {
        try {
            $stmt = $pdo->prepare('SELECT * FROM users WHERE username = :username');
            $stmt->execute(['username' => $username]);
            $user = $stmt->fetch();

            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                echo json_encode(['status' => 'success', 'message' => 'Login avvenuto con successo']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Credenziali non valide']);
            }
        } catch (PDOException $e) {
            echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Errore di connessione al database']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Username o password mancanti']);
}
?>
