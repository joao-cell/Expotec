<?php
// Verifique se o ID do aviso foi passado via parâmetro GET
if (isset($_GET['id'])) {
    $aviso_id = $_GET['id'];

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

    // Consulta para excluir o aviso
    $sql = "DELETE FROM avisos WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $aviso_id);

    if ($stmt->execute()) {
        header("Location: ../Global/Admin/Avisos.php");
    } else {
        echo "Erro ao remover o aviso: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "ID do aviso não especificado."; 
}
?>
