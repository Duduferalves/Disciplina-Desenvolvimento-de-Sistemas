<?php
// Inicializa as variáveis vazias
$nome = "";
$idade = "";
$altura = "";

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados enviados pelo formulário
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $altura = $_POST["altura"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- Formulário que envia os dados para o mesmo arquivo -->
    <form method="post">

        <!-- Campo Nome -->
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome"><br><br>

        <!-- Campo Idade -->
        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade"><br><br>

        <!-- Campo Altura -->
        <label for="altura">Altura (em metros):</label>
        <input type="text" id="altura" name="altura"><br><br>

        <!-- Botão de envio -->
        <button type="submit">Enviar</button>
    </form>

    <?php
    // Exibe os dados somente se todos os campos estiverem preenchidos
    if ($nome != "" && $idade != "" && $altura != "") {
        echo "<h3>Dados informados:</h3>";
        echo "Nome: $nome <br>";
        echo "Idade: $idade <br>";
        echo "Altura: $altura m";
    }
    ?>

</body>
</html>