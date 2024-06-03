<?php
$database = [
    'database' => 'web_heroes_db',
    'username' => 'root',
    'password' => 'password',
    'host' => '127.0.0.1',
    'port' => '3306',
    'driver' => 'mysql',
];

try {
    $pdo = new PDO(
        "{$database['driver']}:host={$database['host']};dbname={$database['database']};port={$database['port']}",
        $database['username'],
        $database['password']
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>
