<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <ul>
      <li><a href="./Global/login/loginProfessores.php">Professores</a></li>
      <li><a href="./Global/login/loginAlunos.php">Alunos</a></li>
      <li><a href="./Global/login/loginAdmin.php">Coordenação</a></li>
    </ul>
    <?php
    session_start();
    session_destroy();
    ?>
  </body>
</html
