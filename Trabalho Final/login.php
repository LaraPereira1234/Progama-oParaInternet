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
        #btncadastro{
            border-radius: 2px;
            color: light blue;
        }
    </style>
</head>
<body>
    <h2>Login</h2>
    <form action = "Autenticacao.php" method = "post">
        <fieldset>
        <label for = "usuario">Usuario</label>
        <input type = "text" name = "usuario" id = "usuario">

        <label for = "senha">Senha</label>

        <input type = "submit" value= "Entrar" id = "btnlogin">
    </fieldset>
    </form>
    
    <h4>Cadastre-se aqui:</h4>
        <input type = "submit" name = "cadastro" id = "bntcadastro"> 
</body>
</html>