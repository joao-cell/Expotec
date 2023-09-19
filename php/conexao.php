<?php
$hostname = "localhost";  
$username = "root";
$password = "";  
$database = "expotec_db"; 


$mysqli = new mysqli($hostname, $username, $password, $database);


if ($mysqli->connect_error) {
    die("Falha na conexão: " . $mysqli->connect_error);
}else{

    echo '<script>console.log("Conexão bem suscessida")</script>';
}
?>
