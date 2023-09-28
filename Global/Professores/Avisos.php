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
    header('Location: ../../logout.html');
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
                  position: fixed;
                  left: 37%;
                  top: 25%;
                  border-style: none;
                  padding-bottom: 45px;
                  padding-left: 15px;
                  padding-right: 15px;
                  
                  border-radius: 9px;
                  width: 25%;
                  
                  box-shadow: 0px 1px 4px grey;
                  
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

                position: absolute;
                left: 20%;
                background-color: #244393;
                color: white;
                width: 50%;
                border-radius: 10px;
                margin-bottom: 20px;

        }
        .col button:hover {
              background-color: #192f69;
        }
        .col input{
                width: 60%;
                border-style: none;
                border-radius: 9px;
                box-shadow: 0px 1px 4px grey;
        }
        .col textarea{
                position: flex;
                resize: none;
                width: 80%;
                border-style: none;
                border-radius: 9px;
                height: 20vh;
                box-shadow: 0px 1px 4px grey;
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
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #244393">
    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" style="color: white" href="index.PHP">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: white" href="../professores/notas.php">Notas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: white" href="../professores/avisos.php">Avisos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: white" href="../professores/horarios.php">Horários</a>
            </li>
        </ul>
        <div id="logout">
            <form method="post">
                <div><button type="submit" name="sair" class="btn">Sair</button></div>
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
            <form method="POST">
                <h1>Titulo:<br>
                    <input type="text" name="titulo"><br><br>

                    Descrição:</h1>
                <textarea cols="30" rows="10" name="descricao"></textarea><br>

                <select name="sala">
                    <option value="">Selecionar Sala</option>
                    <?php
                    // Preencha o ComboBox com as salas
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row['id'] . '">' . $row['nome'] . '</option>';
                    }
                    ?>
                </select><br>

                <button type="submit" name="btn_enviar" class="btn">Enviar Mensagem</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>

<?php
if (isset($_POST['btn_enviar'])) {
    // Capturar os dados do formulário
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $sala_id = $_POST['sala']; // A sala selecionada no ComboBox

    // Inserir o aviso no banco de dados (substitua com sua lógica de inserção)
    $sql_insert_aviso = "INSERT INTO avisos (aviso, data_aviso, turma_id, titulo) VALUES (?, NOW(), ?, ?)";
    $stmt = $conn->prepare($sql_insert_aviso);
    $stmt->bind_param("sds", $descricao, $sala_id, $titulo);

    if ($stmt->execute()) {
        echo "Aviso inserido com sucesso!";
    } else {
        echo "Erro ao inserir o aviso: " . $stmt->error;
    }

    // Fechar a declaração e a conexão
    $stmt->close();
    $conn->close();
}
?>
