<?php
session_start();
header('Content-Type: application/json');

$action = $_GET['action'] ?? '';

if ($action === 'login') {
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
                    echo json_encode(['status' => 'success', 'message' => 'Login successful']);
                } else {
                    echo json_encode(['status' => 'error', 'message' => 'Invalid credentials']);
                }
            } catch (PDOException $e) {
                echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Database connection error']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Missing username or password']);
    }
} elseif ($action === 'check_auth') {
    if (isset($_SESSION['user_id'])) {
        echo json_encode(['status' => 'authenticated']);
    } else {
        echo json_encode(['status' => 'unauthenticated']);
    }
} elseif ($action === 'logout') {
    session_destroy();
    echo json_encode(['status' => 'success', 'message' => 'Logout successful']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid action']);
}
?>
