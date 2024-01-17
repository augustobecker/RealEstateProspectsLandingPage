<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);

    echo "Dados recebidos:<br>";
    echo "Nome: $nome<br>";
    echo "E-mail: $email";
}
?>
