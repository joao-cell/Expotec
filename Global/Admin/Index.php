<?php

session_set_cookie_params(0);
session_start();
if (empty($_SESSION['user'])) {
    header('Location: ../login/loginAdmin.php'); 
    exit(); 
}

if (isset($_POST['sair'])) {
  session_destroy();
  header('Location: ../../logout.html'); 
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
            <a class="nav-link" style="color: white" href="../Admin/notas.php"
              >Notas</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: white" href="../Admin/avisos.php"
              >Avisos</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              style="color: white"
              href="../Admin/horarios.php"
              >Horários</a
            >
          </li>
          <li class="nav-item">
          <a 
              class="nav-link"  
              style="color: white" 
              href="../admin/cadastro.php">
              Cadastro</a>
          </li>
        </ul>
      </div>
      <form method="post">
        <div id="logout"><button type="submit" name="sair" class="btn">Sair</button></div>
    </form>
    </nav>
    <div class="conteiner">
      <div class="row">
        <div class="col mt-5"></div>
      </div>
    </div>
    <div id="texto">
      <center>
      <h1>Bem vindo ao FortecHub <?php echo $_SESSION['user'];?></h1>
        <h2>Olá administrador! fique a vontade para cadastrar usuários, alterar notas, enviar avisos e por ultimo
          enviar ou alterar os horários.
        </h2>
      </center>
    </div>

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
      #logout :hover{
            background-color:  #324f9a  ;
            border-radius: 4px;
            
      }
      #logout button{
            border-radius: 4px;
            background-color: #244393 ;
            color: white;
      }

    </style>
    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
  </body>
</html>
