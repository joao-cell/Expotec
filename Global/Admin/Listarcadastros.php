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
        .col select{
            color: gray;
            border-radius: 10px;
            border-style: none;
            box-shadow: 0px 1px 4px grey;



        }
        .col button{
            border-radius: 9px;
            background-color: #244393;
            color: white;


        }
        .col button:hover{
            background-color: #192f69;
            color: white;

        }
</style>
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbName = "expotec_db";
session_set_cookie_params(0);
session_start();
if (empty($_SESSION['user'])) {
    header('Location: ../login/loginAdmin.php');
    exit();
}

if (isset($_POST['sair'])) {
    session_destroy();
    header('Location: ../../Index.php');
}

$conn = mysqli_connect($hostname, $username, $password, $dbName);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

if (isset($_POST['btn_enviar'])) {
    $table = $_POST['tabel'];
    if (in_array($table, ['administradores', 'professores', 'alunos', 'turmas', 'materias'])) {
        $query = "SELECT * FROM $table";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Erro na consulta: " . mysqli_error($conn));
        }
    } else {
        echo "<script>alert('Tipo de tabela inválido');</script>";
    }
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
    <title>FortecHub</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" crossorigin="anonymous">
    <style>
        /* Adicione seus estilos CSS aqui */
    </style>
</head>
<body>
<script src="js/bootstrap.bundle.min.js"></script>

<!-- Navbar -->
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
    <form  method="post">
        <button type="submit" style="color:#fff!important;" name="sair" class="btn">Sair</button>
    </form>
</div>

</nav>
<center>
    <h1 style="padding-top: 20px;">Usuários</h1>
    <h2 style="font-size: 18px; color: gray;">Adicione, altere ou exclua usuários, turmas, matérias e horários!</h2>
</center>
<div class="container">
    <div class="row">
        <div class="col mt-5">
            <center>
                <form method="POST">
                    <select name="tabel">
                        <option value="">Tipo</option>
                        <option value="administradores">Administradores</option>
                        <option value="professores">Professores</option>
                        <option value="alunos">Alunos</option>
                        <option value="turmas">Turmas</option>
                        <option value="materias">Matérias</option>
                    </select>
                    <button type="submit" class="btn" name="btn_enviar" id="src">Pesquisar</button>
                </form>
            </center>
            <div id="table-alunos">
    <?php
    if (isset($result)) {
        $tableHeaders = [
            'administradores' => ['user', 'senha'],
            'professores' => ['user', 'senha'],
            'alunos' => ['user', 'senha'],
            'turmas' => ['nome'],
            'materias' => ['nome'],
        ];

        if ($result->num_rows > 0) {
            $tableName = $_POST['tabel'];
            echo "<h1>$tableName</h1>";
            echo "<table class='table  table-striped table-bordered'>
                <thead class='thead-light'>
                <tr>";
            foreach ($tableHeaders[$tableName] as $header) {
                echo "<th>$header</th>";
            }
            echo "<th>Ação</th>
                </tr>
                </thead>
                <tbody>";
            while ($row = mysqli_fetch_array($result)) {
                $id = $row['id'];
                echo "<tr>";
                foreach ($tableHeaders[$tableName] as $header) {
                    echo "<td>" . $row[$header] . "</td>";
                }
                echo "<td>
                <button type='button' class='btn'  name='delete' onclick='confirmarRemocao($id, \"$table\")' style='width: 50%;  background-color: #F72427; color: white;'>Excluir</button>
                </td>
                </tr>";
            }
            echo "</tbody></table>";
        }
    }
    ?>
</div>
            <script>
function confirmarRemocao(id, table) {
    if (confirm("Você realmente deseja remover esta mensagem?")) {
        // O usuário clicou em "Sim", redirecionar para removerAvisoAdmin.php com os parâmetros
        window.location.href = "../../php/removeUser.php?id=" + id + "&table=" + table;
    } else {
        // O usuário clicou em "Não", não faz nada
    }
}

</script>
        </div>
    </div>
</div>
</body>
</html>
