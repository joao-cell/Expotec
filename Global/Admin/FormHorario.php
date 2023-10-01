<!DOCTYPE html>
<html>
<head>
    <title>Inserir Horário</title>
</head>
<body>
    <h1>Inserir Horário</h1>
    
    <?php
    // Configurações do banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "expotec_db";

    // Cria a conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Função para buscar dados do banco de dados e gerar opções
    function gerarOpcoes($conn, $tabela, $campo_id, $campo_nome) {
        $sql = "SELECT $campo_id, $campo_nome FROM $tabela";
        $result = $conn->query($sql);
        $options = "";

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $options .= "<option value='" . $row[$campo_id] . "'>" . $row[$campo_nome] . "</option>";
            }
        }

        return $options;
    }

    // Processar o formulário quando for enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dias_id = $_POST["dias_id"];
        $turma_id = $_POST["turma_id"];
        $horas_id = $_POST["horas_id"];
        $professores_id = $_POST["professores_id"];
        $materia_id = $_POST["materia_id"];

        // Crie a consulta SQL para inserir no banco de dados
        $sql = "INSERT INTO horarios (dias_id, turma_id, horas_id, professores_id, materia_id) VALUES ('$dias_id', '$turma_id', '$horas_id', '$professores_id', '$materia_id')";

        if ($conn->query($sql) === TRUE) {
            echo "Horário inserido com sucesso!";
        } else {
            echo "Erro ao inserir horário: " . $conn->error;
        }
    }
    ?>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <!-- Campos do formulário -->
        <label for="dias_id">Dia:</label>
        <select name="dias_id" id="dias_id">
            <?php echo gerarOpcoes($conn, "dias", "id", "dia"); ?>
        </select>
        <br><br>

        <label for="turma_id">Turma:</label>
        <select name="turma_id" id="turma_id">
            <?php echo gerarOpcoes($conn, "turmas", "id", "nome"); ?>
        </select>
        <br><br>

        <label for="horas_id">Hora:</label>
        <select name="horas_id" id="horas_id">
            <?php echo gerarOpcoes($conn, "horas", "id", "hora"); ?>
        </select>
        <br><br>

        <label for="professores_id">Professor:</label>
        <select name="professores_id" id="professores_id">
            <?php echo gerarOpcoes($conn, "professores", "id", "user"); ?>
        </select>
        <br><br>

        <label for="materia_id">Matéria:</label>
        <select name="materia_id" id="materia_id">
            <?php echo gerarOpcoes($conn, "materias", "id", "nome"); ?>
        </select>
        <br><br>

        <input type="submit" value="Inserir Horário">
    </form>
</body>
</html>
