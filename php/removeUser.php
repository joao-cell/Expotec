<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "expotec_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão com o banco de dados falhou: " . $conn->connect_error);
}
if (isset($_GET['id']) && isset($_GET['table'])) {
    $id = $_GET['id'];
    $tabela = $_GET['table'];

    // Conexão com o banco de dados
    // ...

    // Consulta para verificar se existem registros relacionados
    $sql_check_related = "SELECT COUNT(*) FROM horarios WHERE professores_id = ?";
    $stmt_check_related = $conn->prepare($sql_check_related);
    $stmt_check_related->bind_param("i", $id);
    $stmt_check_related->execute();
    $stmt_check_related->bind_result($count);

    if ($stmt_check_related->fetch() && $count > 0) {
        // Existem registros relacionados, você pode excluir os registros relacionados primeiro
        echo "exclua os horarios desse professor antes de continuar a requisição.";
    } else {
        // Não há registros relacionados, você pode excluir o registro principal
        $stmt_check_related->close();

        // Consulta para excluir o registro principal
        $sql = "DELETE FROM $tabela WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            header("Location: ../Global/Admin/Listarcadastros.php");
            exit();
        } else {
            echo "Erro ao remover item: " . $stmt->error;
        }

        $stmt->close();
    }

    $conn->close();
} else {
    echo "ID do item ou tabela não especificados.";
}
?>