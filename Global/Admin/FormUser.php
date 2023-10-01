<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbName = "expotec_db";

$conn = new mysqli($hostname, $username, $password, $dbName);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

session_set_cookie_params(0);
session_start();
if (empty($_SESSION['user'])) {
    header('Location: ../login/loginAdmin.php');
    exit();
}

if (isset($_POST['sair'])) {
    session_destroy();
    header('Location: ../../Index.php');
    exit();
}

if (isset($_POST['btn_enviar'])) {
    $table = $_POST['tabel'];

    if ($table === "administradores" || $table === "professores" || $table === "alunos" || $table === "materias") {
        // Obtenha os dados do formulário
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        // Conecte-se ao banco de dados

        // Use uma consulta SQL preparada para inserir o novo registro na tabela apropriada
        $query = "INSERT INTO $table (user, senha";
        
        if ($table === "alunos") {
            $turma_id = $_POST['turma_id'];
            $query .= ", turma_id";
        }

        $query .= ") VALUES (?, ?";

        if ($table === "alunos") {
            $query .= ", ?";
        }

        $query .= ")";
        
        $stmt = $conn->prepare($query);
        
        if ($table === "alunos") {
            $stmt->bind_param("ssi", $nome, $senha, $turma_id);
        } else {
            $stmt->bind_param("ss", $nome, $senha);
        }

        if ($stmt->execute()) {
            echo "Registro adicionado com sucesso na tabela $table!";
        } else {
            echo "Erro ao adicionar registro na tabela $table: " . $conn->error;
        }

        $stmt->close();
    }
}
?>

<?php
if (empty($_SESSION['user'])) {
    header('Location: ../login/loginAdmin.php'); 
    exit(); 
}

if (isset($_POST['sair'])) {
  session_destroy();
  header('Location: ../../Index.php'); 
}

?>
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
    <style>
        /* Estilo para botões */
.btn {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.btn:hover {
    background-color: #0056b3;
}

/* Estilo para o formulário */
form {
    margin-top: 20px;
    padding: 20px;
    background-color: #fff;
    border: 1px solid #dee2e6;
    border-radius: 5px;
}

input[type="text"],
input[type="password"],
select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ced4da;
    border-radius: 4px;
    margin-top: 5px;
}
        nav a:hover {
            background-color: #324F9A!important;
            border-radius: 9px;
        }

        #logout button:hover {
            background-color: #324f9a;
            border-radius: 4px;
        }

        #logout button {
            border-radius: 4px;
            background-color: #244393;
            color: white;
        }

        #logout {
            height: 39px;
        }

        .H1 {

        }
    </style>
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
                <div class="dropdown nav-item">
                    <a class="nav-link dropdown-toggle" style="color: white" type="button" id="dropdownMenuNotas" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Notas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuNotas">
                        <a class="dropdown-item" href="../Admin/Notas.php">Ver Notas</a>
                        <a class="dropdown-item" href="../Admin/InserirNotas.php">Inserir Nota</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: white" href="../admin/avisos.php">Avisos</a>
            </li>
            <li class="nav-item">
                <div class="dropdown nav-item">
                    <a class="nav-link dropdown-toggle" style="color: white" type="button" id="dropdownMenuHorarios" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Horarios
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuHorarios">
                        <a class="dropdown-item" href="../Admin/horarios.php">Ver Horarios</a>
                        <a class="dropdown-item" href="../Admin/formHorario.php">Inserir Horario</a>
                    </div>
                </div>
            </li>
            <!-- Novo dropdown menu "Registros" -->
            <li class="nav-item">
                <div class="dropdown nav-item">
                    <a class="nav-link dropdown-toggle" style="color: white" type="button" id="dropdownMenuRegistros" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Registros
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuRegistros">
                        <a class="dropdown-item" href="../Admin/Listarcadastros.php">Listar</a>
                        <a class="dropdown-item" href="../Admin/FormUser.php">Inserir</a>
                    </div>
                </div>
            </li>
        </ul>
        <div id="logout">
            <div><button type="submit" name="sair" class="btn">Sair</button></div>
        </div>
    </div>
</nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <center>
                    <form method="POST">
                        <select name="tabel" id="tabel" onchange="toggleTurmaField()">
                            <option>Tipo</option>
                            <option value="administradores">Administradores</option>
                            <option value="professores">Professores</option>
                            <option value="alunos">Alunos</option>
                            <option value="materias">Matérias</option>
                            
                            <!-- Adicione opções para outros tipos, se necessário -->
                        </select>
                        <input type="text" name="nome" placeholder="Nome">
                        <input type="password" name="senha" placeholder="Senha">
                        
                        <!-- Adicione o select para turmas apenas quando "Alunos" for selecionado -->
                        <select name="turma_id" id="turma_id">
                            <option value="">Selecione a Turma</option>
                            <?php
                                // Consulta para obter todas as turmas
                                $query_turmas = "SELECT id, nome FROM turmas";
                                $result_turmas = $conn->query($query_turmas);
                                if ($result_turmas->num_rows > 0) {
                                    while ($row = $result_turmas->fetch_assoc()) {
                                        echo '<option value="' . $row["id"] . '">' . $row["nome"] . '</option>';
                                    }
                                }
                                ?>
                                </select>
                                <button style="margin-top:20px;" type="submit" class="btn" name="btn_enviar" id="src">Adicionar</button>
                                </form>
                                </center>
                                </div>
                                </div>
                                </div>
    </body>
</html>