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
session_start();
$host = "localhost";
$username = "root";
$password = "";
$database = "expotec_db";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
}

$turma_id = $_SESSION['turma_id'];

$sql_avisos = "SELECT * FROM avisos WHERE turma_id = '$turma_id' ORDER BY data_aviso DESC";

$result_avisos = mysqli_query($conn, $sql_avisos);



if (!$result_avisos) {
    die("Erro ao consultar os avisos da turma: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Avisos</title>
</head>
<body>
    <h1>TODOS OS AVISOS</h1><p>
    
    <?php
if (mysqli_num_rows($result_avisos) > 0) {
  while ($row_aviso = mysqli_fetch_assoc($result_avisos)) {
      $titulo = $row_aviso['titulo'];
      $data_aviso = $row_aviso['data_aviso'];
      $aviso = $row_aviso['aviso'];
   
      echo "<h2>$titulo</h2>";
      echo "<strong>  Data: </strong> $data_aviso</p>";
      echo "<p>$aviso</p>";
  }
    }
 else {
    echo "<p>Nenhum aviso disponível para esta turma.</p>";
}
    
mysqli_close($conn);
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

