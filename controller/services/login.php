<?php
    include_once('../infra/conexao.php');

    if(isset($_POST['email']) && isset($_POST['pass'])) {
        if(strlen($_POST['email'])==0) {
            echo "Preencha seu email!";
        } else if(strlen($_POST['pass'])==0) {
            echo "Preencha sua senha!";
        } else {
            $email = $mysqli->real_escape_string($_POST['email']);
            $pass = $mysqli->real_escape_string($_POST['pass']);

            $sql_string = "SELECT * FROM users WHERE email = '$email' AND password = '$pass'";
            $sql_query = $mysqli->query($sql_string) or die("Falha na execução SQL: ". $mysqli->error);

            $registros = ($sql_query->num_rows);
            if($registros == 1) {
                $user_valid = $sql_query->fetch_assoc();

                if(!isset($_SESSION)) {
                    session_start();
                }

                $_SESSION['id'] = $user_valid['id'];
                $_SESSION['name'] = $user_valid['firstname'];

                header('Location: ../../view/home.php');
            } else {
                echo "Falha no login!";
                // Criar page para falha de loguin, retornar uma pág de falha. 'header("Location: loginerror.php")'
            }
        }

    }
?>