<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema de Gestão Escolar</title>
  <link rel="stylesheet" href="./global/css/media.css" />
  <link rel="stylesheet" href="./global/css/bootstrap.min.css" crossorigin="anonymous">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');
    
    body{
      background-color: #f6fbff;
    }
    #prof,
    #alunos,
    #adm {
      background-color: #ffffff;
      width: 18.75rem;
      height: 18.75rem;
      border-style: solid;
      border-color: #c8cbcd;
      padding: 3.125rem;
      border-radius: 18.75rem;
      margin: 2rem;
      margin-bottom: 8rem;
      transition: border-color 0.3s;
    }

    #prof,#alunos,#adm{
      transition:0.8s ease-in-out;
    }

    #prof:hover, #alunos:hover, #adm:hover{
      border-color: #192f69;
      color: #192f69;
      transform:translateY(-50px);
    }

    #prof a, #alunos a, #adm a{
      color: inherit;
      text-decoration: none;
    }

    #prof h1, #alunos h1, #adm h1{
      margin-top: 4rem;
      font-family: 'Roboto', sans-serif;
      color: #808080;
      transition: color 0.3s;
      font-size: 2rem;
    }

    #prof h1:hover, #alunos h1:hover, #adm h1:hover{
      color: #192f69;
    }

    #prof img + h1,
    #alunos img + h1,
    #adm img + h1 {transition:0.8s ease-out;}

    #prof img:hover + h1,
    #alunos img:hover + h1,
    #adm img:hover + h1 {
      color: #192f69;
      transform:scale(1.1);
    }
  </style>
</head>
<body>
<div class="container">
    <div class="d-flex align-items-center justify-content-center" style="min-height: 100vh;">
      <div id="prof" class="">
        <div class="text-center">
          <a href="./Global/login/loginProfessores.php">
            <img src="./global/img/teacher.png" class="img-fluid" alt="Imagem 1">
            <h1>Professores</h1>
          </a>
        </div>
      </div>
      <div id="alunos" class="">
        <div class="text-center">
          <a href="./Global/login/loginAlunos.php">
            <img src="./global/img/student.png" class="img-fluid" alt="Imagem 2">
            <h1>Estudante</h1>
          </a>
        </div>
      </div>
      <div id="adm" class="">
        <div class="text-center">
          <a href="./Global/login/loginAdmin.php">
            <img src="./global/img/adm.png" class="img-fluid" alt="Imagem 3">
            <h1>Coordenador</h1>
          </a>
        </div>
      </div>
    </div>
  </div>
  <?php
  session_start();
  session_destroy();
  ?>
</body>
</html>