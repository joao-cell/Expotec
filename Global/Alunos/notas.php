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
        <a class="nav-link"  style="color: white" href="../alunos/index.php">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: white" href="../alunos/notas.php">Notas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  style="color: white" href="../alunos/avisos.php">Avisos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  style="color: white" href="../alunos/horarios.php">Horários</a>
      </li>
    </ul>
  </div>
</nav>

<div class="conteiner">
    <div class="row">
        <div class="col mt-5">
        <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "expotec_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

session_start();
$aluno_id = $_SESSION['id'];

// Modificando o SQL para obter as notas por bimestre
$sql = "SELECT materias.nome AS materia, 
               MAX(CASE WHEN bimestres.id = 1 THEN notas.nota END) AS bimestre_1, 
               MAX(CASE WHEN bimestres.id = 2 THEN notas.nota END) AS bimestre_2, 
               MAX(CASE WHEN bimestres.id = 3 THEN notas.nota END) AS bimestre_3, 
               MAX(CASE WHEN bimestres.id = 4 THEN notas.nota END) AS bimestre_4 
        FROM notas 
        INNER JOIN materias ON notas.materias_id = materias.id 
        INNER JOIN bimestres ON notas.bimestres_id = bimestres.id 
        WHERE notas.alunos_id = $aluno_id 
        GROUP BY materia";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'class='table table-hover table-striped table-borderred'>
            <tr>
                <th>Materia</th>
                <th>Bimestre 1</th>
                <th>Bimestre 2</th>
                <th>Bimestre 3</th>
                <th>Bimestre 4</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["materia"] . "</td>
                <td>" . $row["bimestre_1"] . "</td>
                <td>" . $row["bimestre_2"] . "</td>
                <td>" . $row["bimestre_3"] . "</td>
                <td>" . $row["bimestre_4"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "ESSE ALUNO AINDA NÃO POSSUI NOTAS EM NENHUMA MATÉRIA";
}

$conn->close();
?>      
        </div>
    </div>
</div>


           
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
   

</style>
    <script src="js/bootstrap.min.js"  crossorigin="anonymous"></script>
  </body>
</html>