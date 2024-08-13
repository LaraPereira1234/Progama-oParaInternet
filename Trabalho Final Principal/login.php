<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            height: 100vh;
        }
        body,form,fieldset{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        #btnlogin{
            border-radius: 4px;
            color: dark blue;
        }
    </style>
</head>
<body>
    <div id = "boxmain">
    <h2>Login</h2>
    <form action = "autenticacao.php" method = "post">
        <fieldset>
        <label for = "email">Email</label>
        <input type = "text" name = "email" id = "email">

        <label for = "senha">Senha</label>

        <input type = "submit" value= "Entrar" id = "btnlogin">
    </fieldset>
    </form>
    <a href = "registrar_user.php"><p>Registrar novo usuario</a>
</body>
</html>