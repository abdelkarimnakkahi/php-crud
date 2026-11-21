<?php
$host = 'mysql:host=localhost;dbname=test';
$user = 'root';
$password = '';
try {
    $pdo = new PDO($host, $user, $password);
    echo "<p>Connected successfully</p>";
} catch (PDOException $e) {
    echo "<p>Error: {$e->getMessage()}</p>";
}
