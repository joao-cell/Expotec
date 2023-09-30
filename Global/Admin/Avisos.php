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
                  position: fixed;
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
   <form method="post">
     <div id="logout"><button type="submit" name="sair" class="btn">Sair</button></div>
 </form>
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

            $host = "localhost";
            $username = "root";
            $password = "";
            $database = "expotec_db";

            $conn = mysqli_connect($host, $username, $password, $database);

            if (!$conn) {
                die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
            }

            

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

                echo "<h2>$titulo</h2>";
                echo "<strong>  Data: </strong> $data_aviso</p>";
                echo "<p>$aviso</p>";
                echo "<button id='delete' class='btn'>Excluir</button>";
                echo " ";
                echo "<button id='alterar' class='btn'>Alterar</button>";
                echo "<hr>";
            }
                }
            else {
                echo "<p>Nenhum aviso disponível para esta turma.</p>";
            }

            mysqli_close($conn);
            ?>  
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
