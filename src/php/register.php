<?php
require_once('database.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    // Validazione dell'username
    $isUsernameValid = filter_var(
        $username,
        FILTER_VALIDATE_REGEXP, [
            "options" => [
                "regexp" => "/^[a-z\d_]{3,20}$/i"
            ]
        ]
    );

    // Validazione della lunghezza della password
    $pwdLength = mb_strlen($password);

    // Controllo dei campi vuoti
    if (empty($username) || empty($password)) {
        $msg = 'Compila tutti i campi %s';
    } elseif (false === $isUsernameValid) {
        $msg = 'Lo username non è valido. Sono ammessi solamente caratteri
                alfanumerici e l\'underscore. Lunghezza minima 3 caratteri.
                Lunghezza massima 20 caratteri';
    } elseif ($pwdLength < 8 || $pwdLength > 20) {
        $msg = 'Lunghezza minima password 8 caratteri.
                Lunghezza massima 20 caratteri';
    } else {
        $password_hash = password_hash($password, PASSWORD_BCRYPT);

        // Controllo se l'username esiste già
        $query = "
            SELECT id
            FROM users
            WHERE username = :username
        ";

        $check = $pdo->prepare($query);
        $check->bindParam(':username', $username, PDO::PARAM_STR);
        $check->execute();

        $user = $check->fetchAll(PDO::FETCH_ASSOC);

        if (count($user) > 0) {
            $msg = 'Username già in uso %s';
        } else {
            // Inserimento dell'utente nel database
            $query = "
                INSERT INTO users (username, password)
                VALUES (:username, :password)
            ";

            $check = $pdo->prepare($query);
            $check->bindParam(':username', $username, PDO::PARAM_STR);
            $check->bindParam(':password', $password_hash, PDO::PARAM_STR);
            $check->execute();

            if ($check->rowCount() > 0) {
                $msg = 'Registrazione eseguita con successo';
            } else {
                $msg = 'Problemi con l\'inserimento dei dati %s';
            }
        }
    }

    printf($msg, '<a href="../register.html">torna indietro</a>');
} else {
    echo 'Metodo di richiesta non supportato.';
}
