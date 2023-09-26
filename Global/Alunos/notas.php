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
// Etapa 1: Conectar ao banco de dados
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
$sql = "SELECT materias.nome AS materia, notas.nota, bimestres.numero AS bimestre
        FROM notas
        INNER JOIN materias ON notas.materias_id = materias.id
        INNER JOIN bimestres ON notas.bimestres_id = bimestres.id
        WHERE notas.alunos_id = $aluno_id";

$result = $conn->query($sql);

// Etapa 3: Imprimir os resultados em uma tabela HTML
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>Matéria</th>
                <th>Nota</th>
                <th>Bimestre</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["materia"] . "</td>
                <td>" . $row["nota"] . "</td>
                <td>" . $row["bimestre"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "ESSE ALUNO AINDA NÃO POSSUI NOTAS EM NENHUMA MATERIA";
}

// Etapa 4: Fechar a conexão com o banco de dados
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