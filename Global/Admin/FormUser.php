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
                    <a class="nav-link" style="color: white" href="../Admin/Cadastro.php">Cadastro</a>
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
            </ul>
            <div id="logout">
                <form method="post">
                    <div><button type="submit" name="sair" class="btn">Sair</button></div>
                </form>
            </div>
        </div>
    </nav>
<div class="conteiner">
    <div class="row">
        <div class="col mt-5">
                
                <h1>Novo Usuário:<br><br>
                        
                <input type="text" placeholder="Nome"><br><br>
               
                <input type="text" placeholder="Senha"><br><br>

                <select name="materiass" id="materiass" >
                      
                      
                          <?php 
                          $hostname="localhost";
                          $username = "root";
                          $password = "";
                          $dbName="expotec_db";                          
                            $conn = mysqli_connect($hostname,$username,$password,$dbName);
                            if ($conn->connect_error) {
                                die("Erro na conexão: " . $conn->connect_error);
                            } 
                            $turmasele = $_POST['turmass'];
                            $query = "SELECT * FROM turmas";
                            $result1 = mysqli_query($conn,$query);
                            while($row1= mysqli_fetch_array($result1)):;
                            echo "<option value='".$row1['id'] . "'>".$row1['nome']."</option>";
                      endwhile;
                      
                      $conn->close();

                      
                      
                    
                          ?>
                    </select><br><br>
                    <center>
                    <button type="submit" name="btn_enviar" class="btn">Enviar</button>
                    </center>
                </form>
        </div>
    </div>
</div>