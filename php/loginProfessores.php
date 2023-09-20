<?php
$login = $_POST['nome_us'];
$entrar = $_POST['entrar'];
$senha = $_POST['senha_us'];
$username = "root";
$password = "";
$dbname = "expotec_db";
$servername = "localhost";


if (isset($entrar)) {
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Evite a injeção de SQL usando declarações preparadas
    $stmt = $conn->prepare("SELECT * FROM professores WHERE user = ? AND senha = ?");
    $stmt->bind_param("ss", $login, $senha);

    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows <= 0) {
        echo "<script language='javascript' type='text/javascript'>
            alert('Erro ao tentar realizar o login!');window.location.href='../Global/login/loginProfessores.php';</script>";
        die();
    } else {
        setcookie("login", $login);
        header("Location: ../Global/Professores/Index.html");
    }

    $stmt->close();
    $conn->close();
}
?>
