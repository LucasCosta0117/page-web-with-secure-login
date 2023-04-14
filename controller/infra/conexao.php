<?php
    $hostname = $_ENV['HOSTNAME'];
    $username = $_ENV['USERNAME'];
    $password = $_ENV['PASSWORD'];
    $database = $_ENV['DATABASE'];

    $mysqli = new mysqli($hostname, $username, $password, $database);

    if($mysqli -> error){
        die("Falha ao conectar-se com o banco de dados: ". $mysqli->error);
    }
?>