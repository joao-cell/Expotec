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
          .container h2{
            padding-left: 20px;
                  
          }
          .container h2{
            padding-left: 20px;
                  
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
        .col{
          padding: 10px;
          border-style: none;
          box-shadow: 0px 1px 4px grey;
          border-radius: 9px;
          
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
    <h1 style="padding-top: 50px">Todos os Avisos</h1><p>
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

$sql_avisos = "SELECT * FROM avisos WHERE turma_id = '$turma_id' ORDER BY data_aviso DESC";

$result_avisos = mysqli_query($conn, $sql_avisos);



if (!$result_avisos) {
    die("Erro ao consultar os avisos da turma: " . mysqli_error($conn));
}
?>


    
    <?php
if (mysqli_num_rows($result_avisos) > 0) {
  while ($row_aviso = mysqli_fetch_assoc($result_avisos)) {
      $titulo = $row_aviso['titulo'];
      $data_aviso = $row_aviso['data_aviso'];
      $aviso = $row_aviso['aviso'];
   
      echo "<h2>$titulo</h2>";
      echo "<strong>  Data: </strong> $data_aviso</p>";
      echo "<p>$aviso</p>";
      echo "<hr>";
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


           

    <script src="js/bootstrap.min.js"  crossorigin="anonymous"></script>
  </body>
</html>

