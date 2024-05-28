<?php
$database = [
    'database' => 'web_heroes_db',
    'username' => 'root',
    'password' => 'password',
    'host' => '127.0.0.1',
    'port' => '3306',
    'driver' => 'mysql',
];

$db_config = $database['driver'] . ":host=".$database['host'] . ";dbname=" . $database['database'];

try {
    $pdo = new PDO($db_config, $database['username'], $database['password'], [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    ]);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e) {
    exit('Could not connect to database' . $e->getMessage());
}
?>
