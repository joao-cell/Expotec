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
        <a class="nav-link"  style="color: white" href="index.html">Inicio</a>
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
            <form method="POST" action="../../php/loginAdmin.php">
                <center><h1>Login</h1></center>
                <h2>Faça login para acessar</h2>
                <input type="hidden" name="acao" value="conta">
                <div class="mb-3">
                    <input type="text" name="nome_us" class="form-control" required placeholder="Nome">
                </div>
                <div class="mb-3">
                    <input type="password" name="senha_us" class="form-control" required placeholder="Senha">
                </div>
                <center>
                    <div class="mb-3">
                        <button type="submit" name="entrar" class="btn">Entrar</button>
                    </div>
                </center>
            </form>
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