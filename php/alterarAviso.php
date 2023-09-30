<?php

// Conexão com o banco de dados (substitua com suas informações de conexão)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "expotec_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifique a conexão
if ($conn->connect_error) {
    die("Conexão com o banco de dados falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletar dados do formulário
    $id = $_POST["id"];
    $novo_titulo = $_POST["novo_titulo"];
    $nova_descricao = $_POST["nova_descricao"];
    $nova_sala = $_POST["nova_sala"];

    $sql = "UPDATE avisos SET titulo = ?, aviso = ?, turma_id = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssii", $novo_titulo, $nova_descricao, $nova_sala, $id);

    if ($stmt->execute()) {
        header("Location: ../Global/Admin/Avisos.php");
    } else {
        echo "Erro ao atualizar o aviso: " . $conn->error;
    }

    // Feche a conexão com o banco de dados
    $conn->close();
} else {
    exit();
}
?>
