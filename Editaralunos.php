<?php
$conn = new mysqli("localhost", "root", "", "escola");

if (!$conn->connect_error) {
    die("Erro: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM alunos");

echo "<h2>Lista de Alunos</h2>";

while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row["id"] . "<br>";
    echo "Nome: " . $row["nome"] . "<br>";
    echo "Idade: " . $row["idade"] . "<br>";
    echo "Email: " . $row["email"] . "<br>";

    // botão editar
    echo "<a href='editar.php?id=" . $row["id"] . "'>Editar</a>";
    echo "<br><br><hr>";
}

$conn->close();
?>