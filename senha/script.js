document.getElementById("gerarBtn").addEventListener("click", function() {
    fetch('gerar_senha.php')
    .then(response => response.text())
    .then(data => {
        document.getElementById("senhaGerada").innerHTML = "Senha gerada: " + data; // Exibe o número da senha gerada
    });
});


