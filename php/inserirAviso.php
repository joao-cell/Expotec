<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "expotec_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }
    
    
    $titulo = $_POST["titulo"];
    $descricao = $_POST["descricao"];
    $sala = $_POST["sala"];

    
    $sql = "INSERT INTO avisos (titulo, aviso, turma_id,`data_aviso`) VALUES (?, ?, ?, now())";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $titulo, $descricao, $sala);

    if ($stmt->execute()) {
    
        header("Location: ../Global/Admin/Avisos.php");
    } else {
        
        echo "Erro ao inserir o aviso: " . $conn->error;
    }

    
    $conn->close();
} else {
    exit();
}
?>
