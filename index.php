<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Home</title>
</head>
<body>
    <h1>Bem vindo!</h1>
    <p>Para continuar realize seu Login.</p>

    <form method="post" action="./controller/services/login.php">
        <div class="formInput">
            <label for="email">Email: </label>
            <input type="email" id="email" name="email" placeholder="email@exemple.com">
        </div>
        <div class="formInput">
            <label for="pass">Senha: </label>
            <input type="password" id="pass" name="pass">
        </div>
        <button type="submit">Entrar</button>
    </form>

    <a href="./view/cadastrarusuario.php">
        <span class="linkcadastro">Criar cadastro</span>
    </a>
    <a href="">
        <span class="linkcadastro">Esqueci a senha</span>
    </a>
</body>
</html>