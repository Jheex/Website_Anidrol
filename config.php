<?php
$host = '127.0.0.1'; // Usar o IP evita problemas de DNS local
$db   = 'anidrol_db'; 
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Se chegar aqui, a conexão foi um sucesso!
} catch (PDOException $e) {
    die("Erro ao conectar ao banco da Anidrol: " . $e->getMessage());
}