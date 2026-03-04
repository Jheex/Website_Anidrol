<?php
// Configurações do Banco de Dados
$host = "localhost";
$user = "root"; 
$pass = "";     
$db   = "anidrol_db";

try {
    // Conexão com charset utf8 para evitar problemas com acentuação nos nomes dos produtos
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    
    // Define o modo de erro para exceções para facilitar o debug
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Em caso de erro, interrompe a execução e mostra a mensagem
    die("Erro crítico de conexão: " . $e->getMessage());
}
?>