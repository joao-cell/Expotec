<?php

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
    <form action="" method="post">
        <button type="submit" name="sair" class="btn">Sair</button>
    </form>
</div>

    </div>
</nav>
<center><h1><br>Horários de Todas as Turmas</h1></center>
<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "expotec_db";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
}

if (isset($_POST["remover_horario"])) {
    $id_horario_a_remover = $_POST["remover_horario_id"];
    
    // Consulte o dia e a turma deste horário
    $sql = "SELECT dias.dia AS nome_dias, turmas.nome AS nome_turma
            FROM horarios
            INNER JOIN dias ON horarios.dias_id = dias.id
            INNER JOIN turmas ON horarios.turma_id = turmas.id
            WHERE horarios.id = '$id_horario_a_remover'";
    
    $result = mysqli_query($conn, $sql);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $nomeDia = $row['nome_dias'];
        $nomeTurma = $row['nome_turma'];
        
        // Exclua todos os horários do mesmo dia e turma
        $sql = "DELETE FROM horarios
                WHERE turma_id = (SELECT id FROM turmas WHERE nome = '$nomeTurma')
                AND dias_id = (SELECT id FROM dias WHERE dia = '$nomeDia')";
        
        if (mysqli_query($conn, $sql)) {
            echo "<center><h3>Todos os horários de $nomeDia, da turma $nomeTurma, foram removidos com sucesso.</h3>";
        } else {
            echo "Erro ao remover horários do dia $nomeDia para a turma $nomeTurma: " . mysqli_error($conn);
        }
    } else {
        echo "Erro ao consultar o dia e a turma do horário: " . mysqli_error($conn);
    }
}


$sql = "SELECT DISTINCT turmas.nome AS nome_turma FROM horarios
INNER JOIN turmas ON horarios.turma_id = turmas.id"; // Consulta os nomes das turmas disponíveis

$resultTurmas = mysqli_query($conn, $sql);

if (!$resultTurmas) {
    die("Erro ao consultar as turmas: " . mysqli_error($conn));
}

while ($rowTurma = mysqli_fetch_assoc($resultTurmas)) {
    $nomeTurma = $rowTurma['nome_turma'];
    
     // Adicione o título da sala
    
     $sql = "SELECT
     horarios.id AS id_horario,
     horarios.*,
     dias.dia AS nome_dias,
     turmas.nome AS nome_turma,
     horas.hora AS hora_horas,
     professores.user AS user_professores,
     materias.nome AS nome_materias
     FROM horarios
     INNER JOIN dias ON horarios.dias_id = dias.id
     INNER JOIN turmas ON horarios.turma_id = turmas.id
     INNER JOIN horas ON horarios.horas_id = horas.id
     INNER JOIN professores ON horarios.professores_id = professores.id
     INNER JOIN materias ON horarios.materia_id = materias.id
     WHERE turmas.nome = '$nomeTurma'
     ORDER BY dias.id ASC, horas.hora ASC";
 

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Erro ao consultar os horários da turma $nomeTurma: " . mysqli_error($conn));
    }
    
    // Código HTML para exibir os horários agrupados por dia e ordenados por hora em uma tabela
    echo "<div class='container'>";
    echo "<div class='row'>";
    echo "<div class='col mt-5'>";
    echo "<hr>";
    echo "<h2>$nomeTurma</h2>";
    echo "<br>";
    if (mysqli_num_rows($result) > 0) {
        $currentDay = null; // Variável para rastrear o dia atual
        echo "<table border='1' class='table table-hover table-striped table-bordered'>";
        echo '<thead>';
        echo '<tr>';
        echo '<th>Dia</th>';
        echo '<th>Horários</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        while ($row = mysqli_fetch_assoc($result)) {
            $id_horario = $row['id_horario'];
            $dia = $row['nome_dias'];
            $materia = $row['nome_materias'];
            $professor = $row['user_professores'];
            $hora = $row['hora_horas'];
        
            if ($currentDay !== $dia) {
                if ($currentDay !== null) {
                    echo '</td><td><form method="post"><input type="hidden" name="remover_horario_id" value="' . $id_horario . '"><input type="submit" name="remover_horario" value="Remover"></form></td></tr>';
                }
                echo "<tr><td><b>$dia</b></td><td>";
                $currentDay = $dia;
            } else {
                echo '<br> ';
            }
        
            echo "<br><b>$hora</b> - $materia ($professor)";
        }
        
        // Adicione um formulário para remover horário no final do loop
        if ($currentDay !== null) {
            echo '</td><td><form method="post"><input type="hidden" name="remover_horario_id" value="' . $id_horario . '"><input type="submit" name="remover_horario" value="Remover"></form></td></tr>';
        }
        
        
        echo '</td></tr>';
        echo '</tbody>';
        echo '</table>';
        echo "<HR>";
    } else {
        echo "<p>Nenhum horário disponível para a turma $nomeTurma.</p>";
    }
    
    echo "</div>";
    echo "</div>";
    echo "</div>";
}

mysqli_close($conn);
?>
</body>
</html>