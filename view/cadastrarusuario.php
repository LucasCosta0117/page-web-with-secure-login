<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar usuário</title>
</head>
<body>
    <h1>Cadastrar novo usuário:</h1>
    <form method="post" action="../controller/services/cadastro.php">
        <div class="formInput">
            <label for="firstname">Nome: </label>
            <input type="text" id="firstname" name="firstname" placeholder="João">
        </div>
        <div class="formInput">
            <label for="lastname">Sobrenome: </label>
            <input type="text" id="lastname" name="lastname" placeholder="Silva"> 
        </div>
        <div class="formInput">
            <label for="email">Email: </label>
            <input type="email" id="email" name="email" placeholder="email@exemple.com">
        </div>
        <div class="formInput">
            <label for="pass">Senha: </label>
            <input type="password" id="pass" name="pass">
        </div>
        <button type="submit">Cadastrar</button>
    </form>

    <a href="../index.php">
        <p>Retornar ao login</p>
    </a>  
</body>
</html>