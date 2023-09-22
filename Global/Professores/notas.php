<?php
$hostname="localhost";
$username = "root";
$password = "";
$dbName="expotec_db";


session_set_cookie_params(0);
session_start();
if (empty($_SESSION['user'])) {
    header('Location: ../login/loginProfessores.php'); 
    exit(); 
}

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="../css/bootstrap.min.css"
      crossorigin="anonymous"
    />
    <title>FortecHub</title>
  </head>
  <body>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Navbar -->
    <nav
      class="navbar navbar-expand-lg navbar-dark"
      style="background-color: #244393"
    >
      <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" style="color: white" href="index.html"
              >Inicio</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: white" href="../professores/notas.php"
              >Notas</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: white" href="../professores/avisos.php"
              >Avisos</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              style="color: white"
              href="../professores/horarios.php"
              >Horários</a
            >
          </li>
        </ul>
      </div>
    </nav>
    <div class="conteiner">
      <div class="row">
        <div class="col mt-5"></div>
      </div>
    </div>
    <div id="texto">
      <center>
        <h1>Quadro de notas</h1>
        <h2>insira a nota dos alunos aqui</h2>
      </center>
    </div>
    <form method="POST">
    <center>
        <label>selecione a classe do aluno:
            <select name="turmass" id="turmass" onchange="this.form.submit()">
            <option value="0">none</option>
                <?php 
                    $conn = mysqli_connect($hostname,$username,$password,$dbName);
                    if ($conn->connect_error) {
                        die("Erro na conexão: " . $conn->connect_error);
                    }
                    $query = "SELECT DISTINCT turma FROM alunos";
                    $result1 = mysqli_query($conn,$query);
                    while($row1= mysqli_fetch_array($result1)):;
                   echo "<option value='".$row1['turma'] . "'>".$row1['turma']."<option>";
endwhile;    
$conn->close();                                       
                ?>
                

            </select name="alunoss" value="alunos">
            <br>
            selecione o aluno:<select>
                
                    <?php 
                    if (isset($_POST['turmass'])) {
                      $conn = mysqli_connect($hostname,$username,$password,$dbName);
                      if ($conn->connect_error) {
                          die("Erro na conexão: " . $conn->connect_error);
                      } 
                    }
                       $turmasele = $_POST['turmass'];
                       $query = "SELECT user FROM alunos WHERE turma  ='$turmasele'";
                       $result1 = mysqli_query($conn,$query);
                       while($row1= mysqli_fetch_array($result1)):;
                       echo "<option value='".$row1['user'] . "'>".$row1['user']."<option>";
                endwhile;
                $conn->close();
                    ?>
                
            </select>
            <br>
            nota:<input type="text" name="nota" placeholder="digite a nota...">
            <br>
          <input type="submit" name="btn_enviar"> 
        </label>
    </center>
    </form>
    
    <style>
      html,
      body {
        width: 100vw;
        height: 100vh;
        overflow-x: hidden;
        background-image: ;
        background-size: 100% 100%;
        background-attachment: fixed;
        background-repeat: no-repeat;
      }
      .conteiner h1 {
      }
      nav a:hover {
        background-color: #324f9a !important;
        border-radius: 9px;
      }
      .left {
        position: absolute;
        top: 55px;
        width: 20%;
        height: 91%;
        overflow: hidden;
      }
      #texto h1 {
      }
      #texto h2 {
        color: gray;
        font-size: 18px;
      }
    </style>
    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
  </body>
</html>
