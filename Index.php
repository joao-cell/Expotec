<!DOCTYPE html>
<html lang="pt-br">
  <style>
    
    #prof img{
          position: absolute;
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
    #prof :hover{
          background-color: #192f69;

    }
    #alunos img{
          position: absolute;
          background-color: #244393;
          left: 15%;
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
    #alunos :hover{
          background-color: #192f69;

    }
    #adm img{
          position: absolute;
          background-color: #244393;
          left: 65%;
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
    #adm :hover{
          background-color: #192f69;

    }
    #text h1{
          position: absolute;
          left: 35%;
          top: 10%;

    }
</style>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FortecHub</title>
    <link rel="stylesheet" href="./global/css/bootstrap.min.css" crossorigin="anonymous">
  </head>
  <body>
      <div id="text">
        <center>
        <h1> O que você deseja acessar?</h1>
  </center>
  </div>
      <div id="prof">
        <a href="./Global/login/loginProfessores.php">
          <img src="./global/img/proficon.png">
        </a>
      </div>
      <div id="alunos">
        <a href="./Global/login/loginAlunos.php">
          <img src="./global/img/alunoicon.png">
        </a>
      </div>
      <div id="adm">
        <a href="./Global/login/loginAdmin.php">
        <img src="./global/img/cordicon.png">
        </a>
      </div>


    <?php
    session_start();
    session_destroy();
    ?>
  </body>
</html
