<?php
    require '../../global.php';
    
    $hostname = getenv('HOSTNAME');
    $username = getenv('USERNAME');
    $password = getenv('PASSWORD');
    $database = getenv('DATABASE');

    try {
        $mysqli = new mysqli($hostname, $username, $password, $database);
    } catch(Exception $ex) {
        die("Falha ao conectar-se com o banco de dados: ". " [Excpetion: " .$ex ."]");
    }
?>