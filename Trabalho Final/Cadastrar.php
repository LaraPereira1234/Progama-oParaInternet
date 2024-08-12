<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <style>
        body{
            height: 100vh;
        }
        body,div{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        #btnCriar{
            border-radius: 4px;
            color: dark blue;
        }
    </style>
</head>
<body>
    <div>
        <h2>Informe seus dados:</h2>
        <label for = "usuario">Usuário:</label>
        <input type = "text" id = "usuario" name = "usuario">

        <label for = "senha">Senha:</label>
        <input type = "password" id = "senha" name = "senha">

        <input type = "submit" value = "Criar" id = "btnCriar">
    </div>
</body>
</html>