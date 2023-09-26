<?php
$login = strtoupper($_POST['nome_us']);
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

    $stmt = $conn->prepare("SELECT * FROM alunos WHERE user = ? AND senha = ?");
    $stmt->bind_param("ss", $login, $senha);

    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows <= 0) {
        echo "<script language='javascript' type='text/javascript'>
        alert('Usuario ou senha Incorreto!');window.location.href='../Global/login/loginAlunos.php';</script>";
        die();
    } else {
        session_start();
        $sql = "SELECT id FROM alunos WHERE user = '$login'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION['id'] = $row['id'];
        }
            $_SESSION['user'] = $login;
            header("Location: ../Global/Alunos/Index.php");
    }

    $stmt->close();
    $conn->close();
}
?>