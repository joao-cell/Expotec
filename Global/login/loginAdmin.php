
<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include_once "../../php/conexao.php";


    $user = $_POST["nome_us"];
    $senha = $_POST["senha_us"];


    $query = "SELECT id, senha FROM alunos WHERE user = ?";
    

    $stmt = $mysqli->prepare($query);

    if ($stmt) {

        $stmt->bind_param("s", $user);
        $stmt->execute();


        $stmt->bind_result($aluno_id, $senha_hash);

        if ($stmt->fetch()) {

            if ($senha === $senha_hash) {

                $_SESSION["user_id"] = $aluno_id;
                echo '<script>window.location.href = "../general/Index.php";</script>';

            } else {

                $erro = "<div id='erro'>Senha incorreta.<br>Por favor, tente novamente.</div>";
            }
        } else {

            $erro = "Usuário não encontrado. Por favor, verifique o nome de usuário.";
        }


        $stmt->close();
    } else {

        $erro = "Erro na preparação da consulta: " . $mysqli->error;
    }


    $mysqli->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css" crossorigin="anonymous">

    <style>

        body {
            background-image: url(../img/bg2.png);
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
        #erro{
            position: absolute;
            top: 300px;
            color: red;
            text-align: center;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 70vh;
        }

        .box {
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: left;
            align-items: center;
            width: 320px;
            height: 420px;
            padding: 50px;
            border-radius: 9px;
            text-align: center;
            background-color: white;
            box-shadow: 0px 0px 10px black;
        }

        .box h1 {
            margin-bottom: 10px;
            margin-top: -70px;
        }

        .box h2 {
            margin-bottom: 20px;
            color: gray;
            font-size: 15px;
            text-align: center;
        }

        .mb-3 input {
            background-color: white;
            width: 100%;
            border-style: hidden;
            box-shadow: 0px 1px 4px grey;
            margin-bottom: 26px;
        }

        .mb-3 button {
            background-color: #244393;
            color: white;
            width: 60%;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .mb-3 button:hover {
            background-color: #192f69;
        }

        #logo {
            opacity: 0.5;
            margin-top: -40px;
            margin-bottom: -80px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box">
            <form method="POST" action="login.php">
                <center><h1>Login</h1></center>
                <h2>Faça login para acessar</h2>
                <input type="hidden" name="acao" value="conta">
                <div class="mb-3">
                    <input type="text" name="nome_us" class="form-control" required placeholder="Nome">
                </div>
                <div class="mb-3">
                    <input type="password" name="senha_us" class="form-control" required placeholder="Senha">
                </div>
                <center>
                    <div class="mb-3">
                        <button type="submit" class="btn">Entrar</button>
                    </div>
                </center>
            </form>
            <div id="logo">
                <img src="../img/logo.png" width="100px">
            </div>
            <?php
            if (isset($erro)) {
                echo '<p class="text-danger">' . $erro . '</p>';
            }
            ?>
        </div>
    </div>

</body>
</html>
