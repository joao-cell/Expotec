<!DOCTYPE html>
<html lang="pt-br">
  <style>
    
    #prof img{
          
          background-color: #244393;
          left: 40%;
          top: 20%;
          width: 300px;
          height: 300px;
          border-style: solid;
          border-color: white;
          padding: 10px;
          border-radius: 200px;
          box-shadow: 0px 5px 10px black;
          overflow: hidden;
    }
    #prof img:hover{
          background-color: #192f69;

    }
    #alunos img{
          
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
    #alunos img:hover{
          background-color: #192f69;

    }
    #adm img{
         
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
    #adm img:hover{
          background-color: #192f69;

    }
    .vertical-align {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
    .container{
            position: absolute;
            top: -10%;
            left: 20%;
    }
    .text-center h1{
            font-size: 20px;
    }

</style>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./global/css/media.css" />
    <link rel="stylesheet" href="./global/css/bootstrap.min.css" crossorigin="anonymous">
    <title>FortecHub</title>
  </head>
  <body>
  <div class="container">
    <div class="row vertical-align">
      <div id="prof"  class="col-md-4">
        <div class="text-center">
          <a href="./Global/login/loginProfessores.php">
            <img src="./global/img/proficon.png"  class="img-fluid" alt="Imagem 1">
          </a>
          <h1>Hub dos Professores</h1>
        </div>
      </div>
      <div id="alunos" class="col-md-4">
        <div class="text-center">
          <a href="./Global/login/loginAlunos.php">
            <img src="./global/img/alunoicon.png" class="img-fluid" alt="Imagem 2">
          </a>
          <h1>Hub dos Alunos</h1>
        </div>
      </div>
      <div id="adm" class="col-md-4">
        <div class="text-center">
          <a href="./Global/login/loginAdmin.php">
            <img src="./global/img/cordicon.png"   class="img-fluid" alt="Imagem 3">
          </a>
          <h1>Hub dos Coordenadores</h1>
        </div>
      </div>
    </div>
  </div>
    <?php
    session_start();
    session_destroy();
    ?>
  </body>
</html
