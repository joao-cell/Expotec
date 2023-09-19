<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once "./conexao.php";
    
    
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

                echo '<script>console.log("Login bem-sucedido. Bem-vindo, Aluno!")</script>';
                header("Location: ../Global/general/Index.html");
                exit;
                

            } else {
                echo '<script>console.log("Senha incorreta. Por favor, tente novamente.")</script>';//CONSOLE NÃO MUDA AKI IDIOTA

                echo "Senha incorreta. Por favor, tente novamente.";
                echo '<script>console.log("")</script>';
            }
        } else {

            echo "Usuário não encontrado. Por favor, verifique o nome de usuário.";
            echo '<script>console.log("Usuário não encontrado. Por favor, verifique o nome de usuário.")</script>';//CONSOLE NÃO MUDA AKI JOÃO BURRO
        }

        $stmt->close();
    } else {
        echo '<script>console.log("Erro na preparação da consulta.")</script>';
    }

    $mysqli->close();
}
?>
