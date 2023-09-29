<?php 

session_set_cookie_params(0);
session_start();
if (empty($_SESSION['user'])) {
    header('Location: ../login/loginAlunos.php'); 
    exit(); 
}

if (isset($_POST['sair'])) {
  session_destroy();
  header('Location: ../../logout.html'); 
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
    <div id="logout">
      <form method="post">
        <div><button type="submit" name="sair" class="btn">Sair</button></div>
      </form>
  </div>
  </div>
</nav>
<center>
    <h1 style="padding-top: 50px">Todos os horarios</h1><p>
</center>
>
<div class="container">
    <div class="row">
        <div class="col mt-5">
        
        <?php

$host = "localhost";
$username = "root";
$password = "";
$database = "expotec_db";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
}

$turma_id = $_SESSION['turma_id'];

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
WHERE horarios.turma_id = " . $_SESSION['turma_id'] . "
ORDER BY dias.id ASC, horas.hora ASC"; // Ordena por dia e, em seguida, por hora

$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Erro ao consultar os horários da turma: " . mysqli_error($conn));
}
?>

<!-- Código HTML para exibir os horários agrupados por dia e ordenados por hora em uma tabela -->
<div class="container">
    <div class="row">
        <div class="col mt-5">
            <?php
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
                    $dia = $row['nome_dias'];
                    $materia = $row['nome_materias'];
                    $professor = $row['user_professores'];
                    $hora = $row['hora_horas'];
                    $turma = $row['nome_turma'];

                    
                    if ($currentDay !== $dia) {
                        if ($currentDay !== null) {
                            echo '</td></tr>'; 
                        }
                        echo "<tr><td><b>$dia</b></td><td>";
                        $currentDay = $dia;
                    } else {
                        echo '<br> '; 
                    }

                    echo "<br><b>$hora</b> - $materia ($professor)";//imprime as coisa ai
                }

                
                echo '</td></tr>';
                echo '</tbody>';
                echo '</table>';
            } else {
                echo "<p>Nenhum horário disponível para esta turma.</p>";
            }

            mysqli_close($conn);
            ?>
        </div>
    </div>
</div>



           

    <script src="js/bootstrap.min.js"  crossorigin="anonymous"></script>
  </body>
</html>