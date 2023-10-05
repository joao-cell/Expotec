<?php
// Inicialização da sessão
session_set_cookie_params(0);
session_start();

// Verifique se o usuário está autenticado
if (empty($_SESSION['user'])) {
    header('Location: ../login/logout.html');
    exit();
}

// Verifique se o botão "Sair" foi pressionado
if (isset($_POST['sair'])) {
    session_destroy();
    header('Location: ../../Index.php'); 
    exit();
}
// Conexão com o banco de dados (substitua com suas informações de conexão)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "expotec_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifique a conexão
if ($conn->connect_error) {
    die("Conexão com o banco de dados falhou: " . $conn->connect_error);
}

// Consulta para recuperar as salas
$sql = "SELECT id, nome FROM turmas";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
        <!-- Inclua o Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- Inclua o jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<!-- Inclua o Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>

<!-- Inclua o Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
                  position: absolute;
                  left: 5%;
                  top: 20%;
                  border-style: none ;
                  padding-bottom: 25px;
                  padding-left: 15px;
                  padding-right: 15px;
                  box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
                  border-radius: 9px;
                  width: 25%;
                }
                .container{
                  position: absolute;
                  left: 31%;
                  top: 20%;
                  border-style: none ;
                  padding-bottom: 25px;
                  padding-left: 15px;
                  padding-right: 5px;
                  box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
                  border-radius: 9px;
                  width: 25%;
                }
          nav a:hover{

                background-color: #324F9A!important;
                border-radius: 9px;
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
               
                
                background-color: #244393;
                color: white;
                width: 50%;
                border-radius: 10px;
                margin-bottom: 20px;

        }
        .col button:hover {
              background-color: #192f69;
              color: white;
        }
        .col input{
                width: 100%;
                border-style: none;
                border-radius: 9px;
                box-shadow: rgba(0, 0, 0, 0.06) 0px 2px 4px 0px inset;
                background-color: #F3F5F5;
                font-size: 22px;
        }
        .col textarea{
                position: flex;
                resize: none;
                width: 100%;
                border-style: none;
                
                border-radius: 9px;
                height: 20vh;
                box-shadow: rgba(0, 0, 0, 0.06) 0px 2px 4px 0px inset;
                background-color: #F3F5F5;
        }
        .col select{
                padding: 1px;
                border-radius: 1px;
                border-style: none;
                box-shadow: 0px 1px 4px grey;
                color: gray;
        }
        #delete{
            background-color: #F72427;
            width: 7%;
            
        }
        #delete:hover{
            background-color: #aa0000;
        }
        #alterar{
            background-color: #1963f7;
            width: 7%;

        }
        #alterar:hover{
            background-color: #164dbf;

        }
</style>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" href="../css/bootstrap.min.css" crossorigin="anonymous"/>
    <title>FortecHub</title>
</head>
<body>
<script src="js/bootstrap.bundle.min.js"></script>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #244393;">
    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" style="color: white" href="../admin/index.php">Inicio</a>
            </li>
            <li class="nav-item">
                <div class="dropdown nav-item">
                    <a class="nav-link dropdown-toggle" style="color: white" type="button" id="dropdownMenuNotas" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Notas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuNotas">
                        <a class="dropdown-item" href="../Admin/Notas.php">Ver Notas</a>
                        <a class="dropdown-item" href="../Admin/InserirNotas.php">Inserir Nota</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: white" href="../admin/avisos.php">Avisos</a>
            </li>
            <li class="nav-item">
                <div class="dropdown nav-item">
                    <a class="nav-link dropdown-toggle" style="color: white" type="button" id="dropdownMenuHorarios" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Horarios
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuHorarios">
                        <a class="dropdown-item" href="../Admin/horarios.php">Ver Horarios</a>
                        <a class="dropdown-item" href="../Admin/formHorario.php">Inserir Horario</a>
                    </div>
                </div>
            </li>
            <!-- Novo dropdown menu "Registros" -->
            <li class="nav-item">
                <div class="dropdown nav-item">
                    <a class="nav-link dropdown-toggle" style="color: white" type="button" id="dropdownMenuRegistros" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Registros
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuRegistros">
                        <a class="dropdown-item" href="../Admin/Listarcadastros.php">Listar</a>
                        <a class="dropdown-item" href="../Admin/FormUser.php">Inserir</a>
                    </div>
                </div>
            </li>
        </ul>
        <div id="logout">
    <form action="" method="post">
        <button type="submit" name="sair" class="btn">Sair</button>
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
            <form action=' ../../php/inserirAviso.php ' method="post">
                <h1>Titulo:<br>
                    
                    <input type="text" name="titulo" placeholder="Escreva o título"><br><br>
                    </center>
                    Descrição:</h1>
                
                <textarea cols="30" rows="10" name="descricao" placeholder="Escreva a descrição"></textarea><br>
                </center>
                <select name="sala">
                    <option value="">Selecionar Sala</option>
                    <?php
                    // Preencha o ComboBox com as salas
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row['id'] . '">' . $row['nome'] . '</option>';
                    }
                    ?>
                </select><br><br>
                <center>
                    <button type="submit" name="btn_enviar" class="btn">Enviar Mensagem</button>
                </center>
                </form>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col mt-5">

            <?php
                    $sql_avisos = "SELECT * FROM avisos WHERE 1 ORDER BY data_aviso DESC";
                    $result_avisos = mysqli_query($conn, $sql_avisos);
                    if (!$result_avisos) {
                        die("Erro ao consultar os avisos da turma: " . mysqli_error($conn));
                    }
            ?>
                <?php
        if (mysqli_num_rows($result_avisos) > 0) {
            while ($row_aviso = mysqli_fetch_assoc($result_avisos)) {
                $titulo = $row_aviso['titulo'];
                $data_aviso = $row_aviso['data_aviso'];
                $aviso = $row_aviso['aviso'];
                $turma_id = $row_aviso['turma_id'];
                $id = $row_aviso['id'];


                $sql_turma = "SELECT nome FROM turmas WHERE id = $turma_id";
                $result_turma = mysqli_query($conn, $sql_turma);

                if ($result_turma && mysqli_num_rows($result_turma) > 0) {
                    $row_turma = mysqli_fetch_assoc($result_turma);
                    $turma_nome = $row_turma['nome'];
                } else {

                    $turma_nome = "Turma não encontrada";
                }

                echo "<h2>$titulo</h2>";
                echo "<strong>  Data: </strong> $data_aviso <b>Turma:</b> $turma_nome</p>";
                echo "<p>$aviso</p>";
                echo "<form method='post' action='../../phpremoverAviso.php'>";
                echo "<input type='hidden' name='id' value='$id'>";
                echo "<button type='button' class='btn'  onclick='confirmarRemocao($id)' style='width: 10%;  background-color: #F72427;'>Excluir</button></form>";
                echo " ";
                echo " ";
                echo "<hr>";
    }
                } else {
                    echo "<p>Nenhum aviso disponivel</p>";
                }

                            mysqli_close($conn);
                ?>  
        </div>
    </div>
</div>
<script>
function confirmarRemocao(id) {
    if (confirm("Você realmente deseja remover esta mensagem?")) {
        // O usuário clicou em "Sim", redirecionar para remover_aviso.php
        window.location.href = "../../php/removerAvisoAdmin.php?id=" + id;
    } else {
        // O usuário clicou em "Não", não faz nada
    }
}
</script>
</body>
</html>