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
<style>
nav a:hover{

  background-color: #324F9A!important;
  border-radius: 9px;
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
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" crossorigin="anonymous">
    <title>FortecHub</title>
  </head>
  <body>
  <script src="js/bootstrap.bundle.min.js"></script>


  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #244393;">
 
  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link"  style="color: white" href="../admin/index.php">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: white" href="../admin/notas.php">Notas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  style="color: white" href="../admin/avisos.php">Avisos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  style="color: white" href="../admin/horarios.php">Horários</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  style="color: white" href="../admin/cadastro.php">Cadastro</a>
      </li>
    </ul>
    <div id="logout">
          <div><button type="submit" name="sair" class="btn">Sair</button></div>
    </div>
  </div>
</nav>
<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "expotec_db";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
}

$sql = "SELECT
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
ORDER BY dias.id ASC, horas.hora ASC"; // Ordena por dia e, em seguida, por hora

$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Erro ao consultar os horários das salas: " . mysqli_error($conn));
}
?>

<!-- Código HTML para exibir os horários agrupados por dia e ordenados por hora em uma tabela -->
<div class="container">
    <div class="row">
        <div class="col mt-5">
<?php
if (mysqli_num_rows($result) > 0) {
    $currentDay = null; // Variável para rastrear o dia atual
    $currentTurma = null; // Variável para rastrear a turma atual
    echo '<div class="container">';
    while ($row = mysqli_fetch_assoc($result)) {
        $dia = $row['nome_dias'];
        $materia = $row['nome_materias'];
        $professor = $row['user_professores'];
        $hora = $row['hora_horas'];
        $turma = $row['nome_turma'];

        if ($currentTurma !== $turma) {
            if ($currentTurma !== null) {
                echo '</table>'; // Fecha a tabela anterior
            }
            echo "<h1>Horário $turma</h1>"; // Adiciona o título da turma
            echo '<table border="1" class="table table-hover table-striped table-bordered">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Dia</th>';
            echo '<th>Horários</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            $currentTurma = $turma;
        }

        if ($currentDay !== $dia) {
            if ($currentDay !== null) {
                echo '</td></tr>'; // Fecha a linha anterior
            }
            echo "<tr><td><b>$dia</b></td><td>";
            $currentDay = $dia;
        } else {
            echo '<hr> '; // Adiciona uma linha horizontal
        }

        echo "<br><b>$hora</b> - $turma ($materia)";
    }

    echo '</td></tr>';
    echo '</tbody>';
    echo '</table>';
    echo '</div>'; // Fecha a div da tabela
} else {
    echo "<p>Nenhum horário disponível para esta turma.</p>";
}

mysqli_close($conn);
?>
</body>