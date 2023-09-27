<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./global/css/media.css" />
  <link rel="stylesheet" href="./global/css/bootstrap.min.css" crossorigin="anonymous">
  <style>
    #prof img,
    #alunos img,
    #adm img {
      background-color: #244393;
      width: 300px;
      height: 300px;
      border-style: solid;
      border-color: white;
      padding: 10px;
      border-radius: 200px;
      box-shadow: 0px 5px 10px black;
      overflow: hidden;
    }

    #prof img:hover,
    #alunos img:hover,
    #adm img:hover {
      background-color: #192f69;
    }

    .text-center h1 {
      font-size: 20px;
    }
  </style>
  <title>FortecHub</title>
</head>
<body>
  <div class="container">
    <div class="d-flex align-items-center justify-content-center" style="min-height: 100vh;">
      <div id="prof" class="">
        <div class="text-center">
          <a href="./Global/login/loginProfessores.php">
            <img src="./global/img/proficon.png" class="img-fluid" alt="Imagem 1">
          </a>
        </div>
      </div>
      <div id="alunos" class="">
        <div class="text-center">
          <a href="./Global/login/loginAlunos.php">
            <img src="./global/img/alunoicon.png" class="img-fluid" alt="Imagem 2">
          </a>
        </div>
      </div>
      <div id="adm" class="">
        <div class="text-center">
          <a href="./Global/login/loginAdmin.php">
            <img src="./global/img/cordicon.png" class="img-fluid" alt="Imagem 3">
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
