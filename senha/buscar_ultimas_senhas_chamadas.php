<?php
include 'conexao.php';

$sql = "SELECT * FROM senhas ORDER BY id DESC LIMIT 5"; // Busca as últimas 5 senhas chamadas
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<li>" . $row["numero_senha"] . "</li>"; // Exibe o número da senha
    }
} else {
    echo "<li>Não há senhas chamadas</li>";
}
$conn->close();
?>
