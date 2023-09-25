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
      .container {
        
      
            
      }
      nav a:hover {
        background-color: #324f9a !important;
        border-radius: 9px;
      }   
      #texto{
        position: absolute;
        left: 40%;
        
      }
      #texto h2 {
        color: gray;
        font-size: 18px;
        
      }
      #texto2{
        position: absolute;
        left: 40%;
        top: 100px;
        padding-left: 10px;
        border-style: none;
        border-radius: 9px;
        box-shadow: 0px 1px 4px grey;
        width: 300px;
        padding: 50px;

      }
      #texto2 select{
        position: absolute;
        left: 25%;
        width: 150px;
        color: gray;
        border-radius: 10px;
        border-style: none;
        box-shadow: 0px 1px 4px grey;
      } 
      #texto2 input{
        position: absolute;
        left: 25%;
        border-radius: 10px;
        width: 150px;
        border-style: none;
        
        box-shadow: 0px 1px 4px grey;
      } 
      .mb-3 button{

            position: absolute;
            left: 20%;
            background-color: #244393;
            color: white;
            width: 60%;
            border-radius: 10px;
            margin-bottom: 20px;

      }
      .mb-3 button:hover {
            background-color: #192f69;
        }
    </style>



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
            <a class="nav-link" style="color: white" href="index.php"
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
    <div class="container">
      <div class="row">
        <div class="col mt-5">

            <div id="texto">
              <center>
                <h1>Quadro de notas</h1>
                <h2>Insira a nota dos alunos aqui</h2>
              </center>
            </div>
            <div id="texto2">
            <form method="POST">
            
                <label>Selecione a classe:<br>
                    <select name="turmass" id="turmass" onchange="this.form.submit()">
                    <option value="0">None</option>
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
                    <br>
                    <label>Selecione o aluno:<br>
                      <select>
                        
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
                    <br>
                    Nota:<br>
                      <input type="text" name="nota" placeholder="Digite a nota" size="10">
                    <br>
                    <br>
                    <div class="mb-3">
                        <button type="submit" name="btn_enviar" class="btn">Enviar</button>
                    </div>
                  
                </label>
              </form>
            </div>
          </div>
        </div>
      </div>
    
    
    
    
    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
  </body>
</html>