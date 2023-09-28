<?php

session_set_cookie_params(0);
session_start();
if (empty($_SESSION['user'])) {
    header('Location: ../login/logout.html'); 
    exit(); 
}

if (isset($_POST['sair'])) {
  session_destroy();
  header('Location: ../../logout.html'); 
}

?>
<style>
nav a:hover{

  background-color: #324F9A!important;
  border-radius: 9px;
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
.row{
                  position: flex;
                  left: 50%;
          }
          .conteiner h1{
                  text-align: left;
                  font-size: 28px;
                  
          }
          
          .conteiner{
                  position: fixed;
                  left: 37%;
                  top: 25%;
                  border-style: none;
                  padding-bottom: 45px;
                  padding-left: 15px;
                  padding-right: 15px;
                  
                  border-radius: 9px;
                  width: 25%;
                  
                  box-shadow: 0px 1px 4px grey;
                  
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
          #texto{
                padding: 10px;


        }
          #texto h1{



          }
          #texto h2{
                color: gray;
                font-size: 18px;
                

        }
        .col button{

                position: absolute;
                left: 20%;
                background-color: #244393;
                color: white;
                width: 50%;
                border-radius: 10px;
                margin-bottom: 20px;

        }
        .col button:hover {
              background-color: #192f69;
        }
        .col input{
                width: 60%;
                border-style: none;
                border-radius: 9px;
                box-shadow: 0px 1px 4px grey;
        }
        .col textarea{
                position: flex;
                resize: none;
                width: 80%;
                border-style: none;
                border-radius: 9px;
                height: 20vh;
                box-shadow: 0px 1px 4px grey;
        }
</style>
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
            <a class="nav-link" style="color: white" href="index.PHP"
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
        <div id="logout">
          <form method="post">
            <div><button type="submit" name="sair" class="btn">Sair</button></div>
          </form>
      </div>
      </div>
    </nav>
    <div id="texto">
  <center>
  <h1>Página de Avisos</h1>
    <h2>Envie avisos para todos verem!</h2>
  </center>
</div>
<div class="conteiner">
    <div class="row">
        <div class="col mt-5">
            <form>
              <h1>Titulo:<br>  
              <input type="text" name="titulo" id=""><BR><br>
                
                  Descrição:</h1>
                  <textarea cols="30" rows="10"></textarea><br>
                
              <br>
              <button type="submit" name="btn_enviar" class="btn">Enviar Mensagem</button>
              </form>
        </div>
    </div>
</div>