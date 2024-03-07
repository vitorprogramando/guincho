<?php
include 'conexao.php';

// Gerar uma nova senha
$nova_senha = rand(1000, 9999);

$sql = "INSERT INTO senhas (senha) VALUES ('$nova_senha')";
if ($conn->query($sql) === TRUE) {
    echo "Senha gerada com sucesso! Número da senha: " . $nova_senha;
} else {
    echo "Erro ao gerar senha: " . $conn->error;
}
$conn->close();
?>
