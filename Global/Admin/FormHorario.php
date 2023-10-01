<?php 
session_set_cookie_params(0);
session_start();
if (empty($_SESSION['user'])) {
    header('Location: ../login/loginAlunos.php'); 
    exit(); 
}

if (isset($_POST['sair'])) {
  session_destroy();
  header('Location: ../../Index.php'); 
}

?>

<style>
    html,body{
        width:100vw;
        height:100vh;
        overflow-x:hidden;
        background-image:;
        background-size: 100% 100%;
        background-attachment: fixed;
        background-repeat: no-repeat;
    }
    .conteiner h1{

    }
    nav a:hover{
        background-color: #324F9A!important;
        border-radius: 9px;
    }

    .left{
        position: absolute;
        top: 55px;
        width: 20%;
        height: 91%;
        overflow: hidden;
    }

    #texto h1{

    }

    #texto h2{
        color: gray;
        font-size: 18px;
    }
    #logout button:hover{
            background-color:  #324f9a ;
            border-radius: 4px;
            
        }
        #logout button{
          border-radius: 4px;
          background-color: #244393 ;
          color: white;
        }
        #logout{
          height: 39px;

        }

</style>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Inclua o Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- Inclua o jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<!-- Inclua o Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>

<!-- Inclua o Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="../css/bootstrap.min.css" crossorigin="anonymous">
    <title>FortecHub</title>
</head>
<body>
<script src="js/bootstrap.bundle.min.js"></script>


<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #244393;">
    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" style="color: white" href="../admin/index.php">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: white" href="../Admin/Cadastro.php">Cadastro</a>
            </li>
            <li class="nav-item">
            <div class="dropdown nav-item">
  <a class="nav-link dropdown-toggle" style="color: white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Notas
  </a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="../Admin/Notas.php">Ver Notas</a>
    <a class="dropdown-item" href="../Admin/InserirNotas.php">Inserir Nota</a>
  </div>
</div>

            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: white" href="../admin/avisos.php">Avisos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: white" href="../admin/horarios.php">Horários</a>
            </li>
        </ul>
        <div id="logout">
          <div><button type="submit" name="sair" class="btn">Sair</button></div>
    </div>
    </div>
</nav>

    <title>Inserir Horário</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Personalize seu CSS aqui */
        form {
            background-color: #fff;
            border: 1px solid #dee2e6;
            padding: 20px;
            border-radius: 5px;
        }
        label {
            font-weight: bold;
        }
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            margin-top: 5px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <br><center><h1>Inserir Horário</h1></center>
    
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
            echo "<h3>Horário inserido com sucesso!</h3>";
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
