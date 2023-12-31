<?php

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

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="../css/bootstrap.min.css" crossorigin="anonymous">
    <title>FortecHub</title>

<style>
        nav a:hover {
            background-color: #324F9A!important;
            border-radius: 9px;
        }

        #logout button:hover {
            background-color: #324f9a;
            border-radius: 4px;
        }

        #logout button {
            border-radius: 4px;
            background-color: #244393;
            color: white;
        }

        #logout {
            height: 39px;
        }

        .H1 {

        }
    </style>
</head>
    <!-- Navbar -->
    <nav
      class="navbar navbar-expand-lg navbar-dark"
      style="background-color: #244393"
    >
      <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" style="color: white" href="index.php"
              >Inicio</a
            >
          </li>
          <li class="nav-item">
                    <div class="dropdown nav-item">
                        <a class="nav-link dropdown-toggle" style="color: white" type="button" id="dropdownMenuNotas" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Notas
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuNotas">
                            <a class="dropdown-item" href="../professores/VerNotas.php">Ver Notas</a>
                            <a class="dropdown-item" href="../professores/InserirNotas.php">Inserir Nota</a>
                        </div>
                    </div>
                </li>
          <li class="nav-item">
            <a class="nav-link" style="color: white" href="../professores/avisos.php"
              >Avisos</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              style="color: white"
              href="../professores/horarios.php"
              >Horários</a
            >
          </li>
        </ul>
        <div id="logout">
          <form method="post">
            <div><button type="submit" name="sair" class="btn">Sair</button></div>
          </form>
      </div>
      </div>
    </nav>
<div class="conteiner">
    <div class="row">
        <div class="col mt-5">
            <h1>Notas</h1>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "expotec_db";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Falha na conexão: " . $conn->connect_error);
            }

            $sql = "SELECT alunos.user AS aluno, 
               materias.nome AS materia, 
               MAX(CASE WHEN bimestres.id = 1 THEN notas.nota END) AS bimestre_1, 
               MAX(CASE WHEN bimestres.id = 2 THEN notas.nota END) AS bimestre_2, 
               MAX(CASE WHEN bimestres.id = 3 THEN notas.nota END) AS bimestre_3, 
               MAX(CASE WHEN bimestres.id = 4 THEN notas.nota END) AS bimestre_4 
            FROM notas 
            INNER JOIN alunos ON notas.alunos_id = alunos.id
            INNER JOIN materias ON notas.materias_id = materias.id 
            INNER JOIN bimestres ON notas.bimestres_id = bimestres.id 
            GROUP BY aluno, materia";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              $currentAluno = null;
          
              while ($row = $result->fetch_assoc()) {
                  if ($currentAluno != $row["aluno"]) {
                      // Inicie uma nova tabela para o próximo aluno
                      if ($currentAluno !== null) {
                          echo "</table>";
                      }
                      $currentAluno = $row["aluno"];
                      $turma = obterTurmaDoAluno($currentAluno); // Função para obter a turma do aluno
          
                      echo "<p><b>Aluno:</b> " . $currentAluno .  "  " . $turma . "</p>";
                      echo "<table border='1' class='table table-hover table-striped table-bordered'>
                              <tr>
                                  <th>Materia</th>
                                  <th>Primeiro Bimestre</th>
                                  <th>Segundo Bimestre</th>
                                  <th>Terceiro Bimestre</th>
                                  <th>Quarto Bimestre</th>
                                  <th>Média Final</th>
                              </tr>";
                  }
          
                  echo "<tr>
                          <td>" . $row["materia"] . "</td>
                          <td>" . $row["bimestre_1"] . "</td>
                          <td>" . $row["bimestre_2"] . "</td>
                          <td>" . $row["bimestre_3"] . "</td>
                          <td>" . $row["bimestre_4"] . "</td>
                          <td>" . calcularMediaFinal($row) . "</td>
                        </tr>";
              }
          
              echo "</table>";
          } else {
              echo "NÃO HÁ NOTAS REGISTRADAS PARA NENHUM ALUNO.";
          }
          
          // Função para obter a turma do aluno a partir do banco de dados
          // Função para obter o nome da turma do aluno a partir do banco de dados
function obterTurmaDoAluno($alunoNome) {
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "expotec_db";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
      die("Falha na conexão: " . $conn->connect_error);
  }

  $sql = "SELECT turmas.nome AS turma_nome
          FROM alunos
          INNER JOIN turmas ON alunos.turma_id = turmas.id
          WHERE alunos.user = '$alunoNome'";
  
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $turmaNome = $row["turma_nome"];
      return "<b>Turma:</b> " . $turmaNome; // Retorna "Turma:" seguido do nome da turma
  } else {
      return "Turma não encontrada";
  }

  $conn->close();
}

          
            function calcularMediaFinal($row) 
            {
                $bimestre_1 = $row["bimestre_1"];
                $bimestre_2 = $row["bimestre_2"];
                $bimestre_3 = $row["bimestre_3"];
                $bimestre_4 = $row["bimestre_4"];

                $media_final = ($bimestre_1 + $bimestre_2 + $bimestre_3 + $bimestre_4) / 4;
                $media_final = round($media_final, 2);

                return $media_final;
            }
            ?>
        </div>
    </div>
</div>


<script src="js/bootstrap.min.js"></script>
</body>
</html>
