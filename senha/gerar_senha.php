<?php
include 'conexao.php';

// Gerar uma senha aleatória (você pode usar um algoritmo mais complexo, se necessário)
$novaSenha = rand(1000, 9999);

$sql = "INSERT INTO senhas (senha) VALUES ('$novaSenha')";
if ($conn->query($sql) === TRUE) {
    echo "Senha gerada com sucesso: $novaSenha";
} else {
    echo "Erro ao gerar senha: " . $conn->error;
}
$conn->close();
?>
