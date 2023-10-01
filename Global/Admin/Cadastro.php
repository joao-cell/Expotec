<?php
$hostname="localhost";
$username = "root";
$password = "";
$dbName="expotec_db";
session_set_cookie_params(0);
session_start();
if (empty($_SESSION['user'])) {
    header('Location: ../login/loginAdmin.php'); 
    exit(); 
}

if (isset($_POST['sair'])) {
  session_destroy();
  header('Location: ../../Index.php'); 
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
#Add{
    background-color: #1fdb12;
    
}
#Add:hover{
    background-color: #1bbf0f;
    
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
      <li class="nav-item">
       <a class="nav-link"  style="color: white" href="../admin/addCadastro.php">Adicionar</a>
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
<h2 style="font-size: 18px; color: gray;">Adicione, Alterer ou exclua Turmas, Alunos, Professores, Adminstradores, Horarios e Matérias</h2>
</center>

<div class="container">
      <div class="row">
          <div class="col mt-5">
            <center>
            <form method="POST">
            
              <select name="tabel">
                  <option>Tipo</option>
                  <option value="administradores">Administradores</option>
                  <option value="professores">Professores</option>
                  <option value="alunos">Alunos</option>
                  <option value="turmas">Turmas</option>
                  <option>Horários</option>
                  <option value="materias">Matérias</option>
              </select>
              
              <button type="submit" class="btn" name="btn_enviar" id="src">Pesquisar</button>
              </form>
              </center>
              
              <div id="table-alunos">
              
                  <?php 
                  if(isset($_POST['btn_enviar'])){
                    $table = $_POST['tabel'];
                    if(($table=="administradores")||($table=="professores")||($table=="alunos")){
                   $conn = mysqli_connect($hostname,$username,$password,$dbName);
                   if ($conn->connect_error) {
                       die("Erro na conexão: " . $conn->connect_error);
                  }
                  $query = "SELECT * FROM $table";
                  $result1 = mysqli_query($conn,$query);
                  echo "<H1>$table</h1>
                  <table border='1' class='table table-hover  table-striped table-bordered'>
                  <thead class= thead-light'>
                  <tr>
                    <th>Nome</th>
                    <th>Senha</th>
                    <th>Tipo</th>
                    <tH>Ação</th>
                  </tr>";
                  while ($row1 = mysqli_fetch_array($result1)) :
                    $id = $row1['id']; // Obtém o valor do ID da linha atual
                    echo "
                    <tr>
                        <td>" . $row1['user'] . "</td>
                        <td>" . $row1['senha'] . "</td>
                        <td>$table</td>
                        <td>
                            <form method='post' action='../../php/removerAviso.php'>
                                <input type='hidden' name='id' value='$id'>
                                <input type='hidden' name='tabela' value='$table'>
                                <button type='button' class='btn' onclick='confirmarRemocao($id)' class='btn btn-danger' background-color: #F72427;'>Excluir</button>
                            </form>
                            <button class='btn btn-success' id='Alt'>Alterar</button>
                        </td>
                    </tr>";
                endwhile;
                
            echo "</table>
            <form method='POST' action='addCadastro.php'>
            <button class='btn btn-success' id='Add'>Adicionar $table</button><br><br>
            </form>";
            $conn->close();
          }
            if(($table=="materias")||($table=="turmas")){
            $conn = mysqli_connect($hostname,$username,$password,$dbName);
            if ($conn->connect_error) {
                die("Erro na conexão: " . $conn->connect_error);
            }
           $query = "SELECT * FROM $table";
           $result1 = mysqli_query($conn,$query);
           echo "<H1>$table</h1>
           <table border='1' class='table table-hover  table-striped table-bordered'>
                  <thead class='thead-light'>
                  <tr>
                    <th>Classe</th>
                    <th>Tipo</th>
                    <th>Ação</th>
                    
                  </tr>";
           while($row1= mysqli_fetch_array($result1)):;
           echo "
                  <tr>
                    <td>".$row1['nome'] . "</td>
                  
                    <td>$table</td>
                    <td><button class='btn btn-danger' id='delete'>Excluir</button>
    
                  <button class='btn btn-success' id='Alt'>Alterar</button></td>
           
         </tr>
        ";
        endwhile;
        echo "</table>
        <button class='btn btn-success' id='Add'>Adicionar $table</button><br><br>";
        $conn->close();
        }
          }
            
                  ?>
              </div>

              
                  
              </div>
          </div>
      </div>   
</div>
<?php
echo "<script>";
echo "var table = '" . $table . "';";
echo "</script>";
?>
<script>
function confirmarRemocao(id) {
    if (confirm("Você realmente deseja remover esta Registro")) {
      var url = "../../php/removerCadastro.php?id=" + id + "&tabela=" + table;
        window.location.href = url;
    } else {
        // O usuário clicou em Não, não faz nada
    }
}

</script>
</body>
</html>