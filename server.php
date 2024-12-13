<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Feedback - Dados Recebidos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
        <h1>Cadastro de Feedback</h1>
        <nav>
            <ul>
                <li><a href="index.html">Início</a></li>
                <li><a href="server.php">Dados</a></li>
                <li><a href="desenvolvedores.html">Desenvolvedores</a></li>
            </ul>
        </nav>
    </header>

<main>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Dados Recebidos</h2>";
    foreach ($_POST as $key => $value) {
        echo "<p><strong>" . htmlspecialchars($key) . ":</strong> " . htmlspecialchars($value) . "</p>";
    }
    echo '<a href="index.html">Voltar</a>';
} else {
    echo "<p>Formulário não enviado corretamente.</p>";
}
?>

</main>
<footer>
        <p>IFRN Campus Santa Cruz</p>
        <p>Trabalho de Autoria Web</p>
        <p>Prof. Marcelo Figueiredo Barbosa Júnior</p>
        <p>Wislânia, Ariel e Maria Aparecida</p>
    </footer>

</body></html>

