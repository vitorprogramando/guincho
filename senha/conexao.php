<?php
$servername = "localhost";
$username = "root"; // usuário padrão do XAMPP
$password = ""; // senha padrão do XAMPP
$dbname = "guincho";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
