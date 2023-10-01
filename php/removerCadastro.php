    <?php

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $tabela = $_GET['tabela'];

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

        
        $sql = "DELETE FROM $tabela WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            header("Location: ../Global/Admin/Cadastro.php");
        } else {
            echo "Erro ao remover o item: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "ID do item não especificado.";
    }
    ?>
