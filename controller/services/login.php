<?php
    include_once '../infra/conexao.php';

    if(isset($_POST['email']) && isset($_POST['pass'])) {
        if(strlen($_POST['email'])==0) {
            echo "Preencha seu email!";
        } else if(strlen($_POST['pass'])==0) {
            echo "Preencha sua senha!";
        } else {
            $email = $mysqli->real_escape_string($_POST['email']);
            $senha = $_POST['pass'];

            $sql_string = "SELECT * FROM users WHERE email = '$email'";
            $sql_query = $mysqli->query($sql_string);

            if(($sql_query->num_rows) == 1) {
                $user_valid = $sql_query->fetch_assoc();

                if(password_verify($senha, $user_valid['password'])) {
                    if(!isset($_SESSION)) {
                        session_start();
                    }
    
                    $_SESSION['id'] = $user_valid['id'];
                    $_SESSION['name'] = $user_valid['firstname'];
    
                    header('Location: ../../view/home.php');
                } else {
                    echo "<p>Falha no login! Senha inválida!</p>";
                }
            } else {
                echo "<p>Falha no login! Email não cadastrado!</p>";
                // Criar page para falha de loguin, retornar uma pág de falha. 'header("Location: loginerror.php")'
            }
        }

    }
?>