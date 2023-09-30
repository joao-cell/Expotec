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
            <a class="nav-link" style="color: white" href="../alunos/notas.php"
              >Notas</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: white" href="../alunos/avisos.php"
              >Avisos</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              style="color: white"
              href="../alunos/horarios.php"
              >Horários</a
            >
          </li>
        </ul>
      </div>

      <div id="logout">
        <form method="post">
          <div><button type="submit" name="sair" class="btn">Sair</button></div>
        </form>

    </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col mt-5"></div>
        <div id="texto">
    <center><h1>Bem-vindo à FortecHub - Seu Portal de Gestão Escolar</h1></center>
    <hr style=" border-top: 1px dashed;">

<p style="letter-spacing: 0.1em; text-align: justify;" class="container-fluid">Na Escola Fortec, acreditamos no poder da educação para transformar vidas.<br>
  Com o compromisso de oferecer uma experiência educacional de excelência, apresentamos o FortecHub, o seu portal completo de gestão escolar.<br>

<b>O Que Oferecemos:</b>

<br><br>1. <b>Notas e Acompanhamento Acadêmico:</b> Acompanhe o progresso dos alunos de forma eficiente. Mantenha registros detalhados de notas, boletins e desempenho acadêmico em um único lugar.

<br><br>2. <b>Avisos e Comunicação:</b> Fique atualizado com os últimos avisos e comunicados da escola. Mantenha-se conectado com pais, alunos e professores de maneira simples e eficaz.

<br><br>3. <b>Horários Personalizados:</b> Acesse os horários de aulas de forma rápida e prática. Nunca perca uma aula importante com o nosso sistema de horários personalizados.





<br><br>Juntos Rumo ao Sucesso: Na Fortec, acreditamos que a parceria entre educadores, alunos e pais é fundamental para o sucesso educacional.

<br>Estamos comprometidos em fornecer as ferramentas necessárias para promover o aprendizado e o desenvolvimento de nossos alunos.

<br>Explore o FortecHub e descubra como podemos simplificar a gestão escolar e aprimorar a experiência de ensino e aprendizado na Escola Fortec.

<br>Seja bem-vindo à era da gestão escolar moderna. Seja bem-vindo à <b>FortecHub<b>.</p>
    </div>
      </div>
    </div>
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
