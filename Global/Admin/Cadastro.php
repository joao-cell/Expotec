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
.col input{
        border-radius: 10px;
        border-style: none;
        box-shadow: 0px 1px 4px grey;
        padding: 5px;
        text-align: left;
      } 
.col select{
        padding: 5px;
        border-radius: 10px;
        border-style: none;
        box-shadow: 0px 1px 4px grey;
        color: gray;
      } 
.col button {
        background-color: #244393 ;
        border-radius: 10px;
        border-style: none;
        box-shadow: 0px 1px 4px grey;
        color: white;
      }

.col button:hover{
        background-color: #192f69 ;
    }
#table-alunos{
        

}
#delete{
      background-color: #F72427;
}
#delete:hover{
      background-color: #aa0000;
}
#Alt{
      background-color: #1963f7;

}
#Alt:hover{
      background-color: #164dbf;

}

</style>
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
        <a class="nav-link"  style="color: white" href="../admin/index.php">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: white" href="../admin/notas.php">Notas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  style="color: white" href="../admin/avisos.php">Avisos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  style="color: white" href="../admin/horarios.php">Horários</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  style="color: white" href="../admin/cadastro.php">Cadastro</a>
      </li>
    </ul>
    <div id="logout">
        <form method="post">
          <div><button type="submit" name="sair" class="btn">Sair</button></div>
        </form>
    </div>
  </div>
</nav>
<center>
<h1 style="padding-top: 20px;">Usuários</h1>
</center>
<div class="container">
      <div class="row">
          <div class="col mt-5">
            <center>
            <form method="POST">
            <input type="text" size="35px" placeholder="Nome" >
              <select>
                  <option>Tipo</option>
                  <option>Administradores</option>
                  <option>Professores</option>
                  <option>Alunos</option>
              </select>
              
              <button type="submit" class="btn" id="src">Pesquisar</button>
              </form>
              </center>
              
              <div id="table-alunos">
                  <table border='1' class='table table-hover  table-striped table-bordered'>
                  <thead class="thead-light">
                  <tr>
                    <th>Nome</th>
                    <th>Senha</th>
                    <th>Tipo</th>
                    <tH>Ação</th>
                  </tr>
                  <tr>
                    <td>Juquinha</td>
                    <td>123</td>
                    <td>Aluno</td>
                
                    <td><button class="btn btn-danger" id="delete">Excluir</button>
      
                    <button class="btn btn-success" id="Alt">Alterar</button></td>
                    
                  </tr>
                  <tr>
                    <td>Maria</td>
                    <td>123</td>
                    <td>Aluno</td>
                    <td><button class="btn btn-danger" id="delete">Excluir</button>
                    
                    <button class="btn btn-success" id="Alt">Alterar</button></td>
                  </tr>
                  <tr>
                    <td>Joanilda Vitória</td>
                    <td>123</td>
                    <td>Aluno</td>
                    <td><button class="btn btn-danger" id="delete">Excluir</button>

                    <button class="btn btn-success" id="Alt">Alterar</button></td>
                  </tr>
                  
                  </table>
              </div>

              <div id="table-adm">
                  <table border='1' class='table table-hover  table-striped table-bordered'>
                  <thead class="thead-light">
                  <tr>
                    <th>Nome</th>
                    <th>Senha</th>
                    <th>Tipo</th>
                    <tH>Ação</th>
                  </tr>
                  <tr>
                    <td>Bruno</td>
                    <td>123</td>
                    <td>Administrador</td>
                
                    <td><button class="btn btn-danger" id="delete">Excluir</button>
      
                    <button class="btn btn-success" id="Alt">Alterar</button></td>
                    
                  </tr>
                  <tr>
                    <td>João</td>
                    <td>123</td>
                    <td>Administrador</td>
                    <td><button class="btn btn-danger" id="delete">Excluir</button>
                    
                    <button class="btn btn-success" id="Alt">Alterar</button></td>
                  </tr>
                  <tr>
                    <td>Eduardo</td>
                    <td>123</td>
                    <td>Administrador</td>
                    <td><button class="btn btn-danger" id="delete">Excluir</button>

                    <button class="btn btn-success" id="Alt">Alterar</button></td>
                  </tr>
                  
                  </table>
              </div>
              <div id="table-prof">
                  <table border='1' class='table table-hover  table-striped table-bordered'>
                  <thead class="thead-light">
                  <tr>
                    <th>Nome</th>
                    <th>Senha</th>
                    <th>Tipo</th>
                    <tH>Ação</th>
                  </tr>
                  <tr>
                    <td>Kleber</td>
                    <td>123</td>
                    <td>Professor</td>
                
                    <td><button class="btn btn-danger" id="delete">Excluir</button>
      
                    <button class="btn btn-success" id="Alt">Alterar</button></td>
                    
                  </tr>
                  <tr>
                    <td>Leandro</td>
                    <td>123</td>
                    <td>Professor</td>
                    <td><button class="btn btn-danger" id="delete">Excluir</button>
                    
                    <button class="btn btn-success" id="Alt">Alterar</button></td>
                  </tr>
                  <tr>
                    <td>Gilmar Aquino</td>
                    <td>123</td>
                    <td>Professor</td>
                    <td><button class="btn btn-danger" id="delete">Excluir</button>

                    <button class="btn btn-success" id="Alt">Alterar</button></td>
                  </tr>
                  
                  </table>
              </div>
          </div>
      </div>   
</div>