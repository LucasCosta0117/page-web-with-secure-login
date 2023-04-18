<?php
    include_once '../infra/conexao.php';

    try{
        $firstname = $mysqli->real_escape_string($_POST['firstname']);
        $lastname = $mysqli->real_escape_string($_POST['lastname']);
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string(password_hash($_POST['pass'], PASSWORD_DEFAULT));
        
        $sql_select = "SELECT EXISTS(SELECT * FROM users WHERE email = '$email')";
        $sql_query = $mysqli->query($sql_select);

        if(($sql_query->lengths)==0){
            $sql_insert = "INSERT INTO users (firstname, lastname, email, password) 
                VALUES ('$firstname', '$lastname', '$email', '$senha')";
                
            $mysqli->query($sql_insert);

            echo "<p>Sucesso ao cadastrar novo usuário!</p>";
        } else {
            echo "<p>O e-mail informado já possui cadastro!</p>";
            var_dump($sql_query);
            // Criar página de error para e-mail já cadastrado e link para index
        }
    } catch(Exception $ex) {
        echo "Error ao criar novo usuário: [Execption = $ex]";
    }
?>