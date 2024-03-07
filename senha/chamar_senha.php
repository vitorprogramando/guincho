<?php
include 'conexao.php';

$sql = "SELECT * FROM senhas ORDER BY id ASC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $numero_senha = $row["numero_senha"];
    $id_senha = $row["id"];

    // Exibe a senha chamada
    echo $numero_senha;

    // Remove a senha chamada da tabela
    $sql_delete = "DELETE FROM senhas WHERE id = $id_senha";
    if ($conn->query($sql_delete) === TRUE) {
        // Remoção bem-sucedida
    } else {
        echo "Erro ao chamar senha: " . $conn->error;
    }
} else {
    echo "Não há senhas na fila";
}
$conn->close();
?>
