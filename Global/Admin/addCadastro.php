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

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css" crossorigin="anonymous">
    <title>Document</title>
    <style>
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

        .col input {
            border-radius: 10px;
            border-style: none;
            box-shadow: 0px 1px 4px grey;
            padding: 5px;
            text-align: left;
        }

        .col select {
            padding: 5px;
            border-radius: 10px;
            border-style: none;
            box-shadow: 0px 1px 4px grey;
            color: gray;
        }

        .col button {
            background-color: #244393;
            border-radius: 10px;
            border-style: none;
            box-shadow: 0px 1px 4px grey;
            color: white;
        }

        .col button:hover {
            background-color: #192f69;
        }

        #delete {
            background-color: #F72427;
        }

        #delete:hover {
            background-color: #aa0000;
        }

        #Alt {
            background-color: #1963f7;

        }

        #Alt:hover {
            background-color: #164dbf;

        }

        #Add {
            background-color: #1fdb12;

        }

        #Add:hover {
            background-color: #1bbf0f;

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
                    <a class="nav-link" style="color: white" href="../admin/notas.php">Notas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: white" href="../admin/avisos.php">Avisos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: white" href="../admin/horarios.php">Horários</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: white" href="../admin/cadastro.php">Cadastro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: white" href="../admin/addCadastro.php">Adicionar</a>
                </li>
            </ul>
            <div id="logout">
                <form method="post">
                    <div><button type="submit" name="sair" class="btn">Sair</button></div>
                </form>
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
                                <button type="submit" class="btn" name="btn_enviar" id="src">Adicionar</button>
                                </form>
                                </center>
                                </div>
                                </div>
                                </div>
    </body>
</html>
