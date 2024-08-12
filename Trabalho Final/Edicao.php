<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição</title>
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
        #btnEditar{
            border-radius: 4px;
            color: dark blue;
        }
    </style>
</head>
<body>
    <div>
        <h2>Editar informações:</h2>
        <label for = "usuario">Usuário novo:</label>
        <input type = "text" id = "usuario" name = "usuario">

        <label for = "senha">Senha nova:</label>
        <input type = "password" id = "senha" name = "senha">

        <input type = "submit" value = "Editar" id = "btnEditar">
    </div>
</body>
</html>