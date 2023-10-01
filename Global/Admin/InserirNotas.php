
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
        #enviar{
            background-color: #244393;
            color: white;
            width: 60%;
            padding: 5px;
            border-style: none;
            border-radius: 10px;
            margin-bottom: 20px;

        }
        #enviar:hover{
          background-color: #192f69;
        }
        #alterar{
          width: 60%;
            padding: 5px;
            border-style: none;

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
if (isset($_POST['sair'])) {
  session_destroy();
  header('Location: ../../Index.php'); 
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
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #244393;">
    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" style="color: white" href="../admin/index.php">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: white" href="../Admin/Cadastro.php">Cadastro</a>
            </li>
            <li class="nav-item">
            <div class="dropdown nav-item">
  <a class="nav-link dropdown-toggle" style="color: white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Notas
  </a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="../Admin/Notas.php">Ver Notas</a>
    <a class="dropdown-item" href="../Admin/InserirNotas.php">Inserir Nota</a>
  </div>
</div>

            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: white" href="../admin/avisos.php">Avisos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: white" href="../admin/horarios.php">Horários</a>
            </li>
        </ul>
        <div id="logout">
        <form method="post">
          <div><button type="submit" name="sair" class="btn">Sair</button></div>
        </form>
    </div>
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
                            $query = "SELECT * FROM turmas";
                            $result1 = mysqli_query($conn,$query);
                            while($row1= mysqli_fetch_array($result1)):;
                            
                          echo "<option value='".$row1['id'] . "'>".$row1['nome']."</option>";
        endwhile;    
        $conn->close();    
                                           
                        ?>
                        

                    </select>
                    <br>
                    <br>
                    <label>Selecione o aluno:<br>
                    
                      <select name="alunoss" id="alunoss" >
                      <option value="vazio">none</option>
                            <?php 
                            if (isset($_POST['turmass'])) {
                              $conn = mysqli_connect($hostname,$username,$password,$dbName);
                              if ($conn->connect_error) {
                                  die("Erro na conexão: " . $conn->connect_error);
                              } 
                            }
                              $turmasele = $_POST['turmass'];
                              $query = "SELECT * FROM alunos WHERE turma_id  ='$turmasele'";
                              $result1 = mysqli_query($conn,$query);
                              while($row1= mysqli_fetch_array($result1)):;
                              echo "<option value='".$row1['id'] . "'>".$row1['user']."</option>";
                        endwhile;
                        
                        $conn->close();

                        
                        
                      
                            ?>
                            
                        
                    </select>
                    
                    
                    <input type="text" name="tur" id="tur" value="" readonly hidden>
                        <?php 
                        $seleid = $_POST['turmass'];
                        $conn = mysqli_connect($hostname,$username,$password,$dbName);
                        
                        $sql = "SELECT * FROM turmas WHERE id = $seleid"; 
                        $result = $conn->query($sql);
                        
                        if ($result->num_rows > 0) {
                            
                            $row = $result->fetch_assoc();
                            $textoDoBancoDeDados = $row["id"];
                        
                            echo '<script>';
                            echo 'document.getElementById("tur").value = "' .$textoDoBancoDeDados . '";';
                            echo '</script>';
                        }
                        
                        
                        $conn->close();
                        ?>
                        <br>
                        <br>
                        <label>Selecione o aluno:<br>
                    
                    <select name="materiass" id="materiass" >
                      
                      
                          <?php 
                          if (isset($_POST['turmass'])) {
                            $conn = mysqli_connect($hostname,$username,$password,$dbName);
                            if ($conn->connect_error) {
                                die("Erro na conexão: " . $conn->connect_error);
                            } 
                          }
                            $turmasele = $_POST['turmass'];
                            $query = "SELECT * FROM materias";
                            $result1 = mysqli_query($conn,$query);
                            while($row1= mysqli_fetch_array($result1)):;
                            echo "<option value='".$row1['id'] . "'>".$row1['nome']."</option>";
                      endwhile;
                      
                      $conn->close();

                      
                      
                    
                          ?>
                    </select>
                    <br>
                    <br>
                    <label>Selecione o bimestre:<br>
                    
                    <select name="bimestress" id="bimestress" >
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                    </select>
                    <br>
                    <br>
                    Nota:<br>
                      <input type="text" id="notass" name="notass" placeholder="Digite a nota" size="10">
                    <br>
                    <br>
                    
                    <div class="mb-3">
                        <button type="submit" name="btn_enviar" class="btn_enviar" id="enviar">Enviar</button>
                        <br>
                        <br>
                        <button type="submit" name="btn_update" class="btn_update" id="alterar">Alterar</button>
                    </div>
                    
                    
                    <br>
                    <br>
                    <?php 
                    if (isset($_POST['btn_enviar'])) {
                   if($_SERVER["REQUEST_METHOD"] === "POST"){
                    
                    $conn = mysqli_connect($hostname,$username,$password,$dbName);
                    if ($conn->connect_error) {
                      die("Erro na conexão: " . $conn->connect_error);
                  }
                  
                  $aluno = $_POST['alunoss'];
                  $materia = $_POST['materiass'];
                  $bimestre = $_POST['bimestress'];
                  $nota = $_POST['notass'];
                  if((empty($nota))||($aluno=="vazio")){

                    echo "campo de notas vazio.";
                  }
                  else{
                    if (is_numeric($nota) && $nota >= 0 && $nota <= 10) {
                  $sql = "INSERT INTO notas (alunos_id, materias_id, bimestres_id, nota) VALUES ('$aluno', '$materia', '$bimestre', '$nota')";
                
                if ($conn->query($sql) === true) {

                  echo "Dados inseridos com sucesso!";
              } else {
                  echo "Erro ao inserir dados: " . $conn->error;
              }
            }
            else{
              echo "a nota deve estar ou ser 10 e 0";
            }
            }
              
            $conn->close();
            }
            
          }
          if (isset($_POST['btn_update'])) {

            if($_SERVER["REQUEST_METHOD"] === "POST"){
                
              $conn = mysqli_connect($hostname,$username,$password,$dbName);
              if ($conn->connect_error) {
                die("Erro na conexão: " . $conn->connect_error);
            }
            
            $aluno = $_POST['alunoss'];
            $materia = $_POST['materiass'];
            $bimestre = $_POST['bimestress'];
            $nota = $_POST['notass'];
            if((empty($nota))||($aluno=="vazio")){
              echo "campo de notas vazio.";
            }
            else 
            {
              if (is_numeric($nota) && $nota >= 0 && $nota <= 10) {
            $sql = "UPDATE notas SET nota='$nota' WHERE bimestres_id='$bimestre' AND materias_id='$materia' AND alunos_id='$aluno'";
          
          if ($conn->query($sql) === true) {

            echo "Dados atualizados com sucesso!";
        } else {
            echo "Erro ao atualizar dados: " . $conn->error;
        }
      }
      else{
        echo "a nota deve estar ou ser 10 e 0";
      }
      }
        $conn->close();
          }
          
        }
              
                    ?>
                  
                </label>
              </form>
            </div>
          </div>
        </div>
      </div>
    
    
    
    
    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
  </body>
</html>