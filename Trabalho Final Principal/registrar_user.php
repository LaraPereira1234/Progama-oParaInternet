<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id = "boxmain">
        <form action = "cadastrar_novo_usuario.php" method = "post">
            <label for = "nome">Nome:</label>
            <input id = "nome" type = "text" name = "nome">

            <br>

            <label for = "email">Email:</label>
            <input id = "email" type = "text" name = "email">

            <br>

            <label for = "senha">Senha:</label>
            <input id = "senha" type = "text" name = "senha">

            <br>

            <label for = "datansc">Data Nascimento:</label>
            <input id = "datansc" type = "date" name = "datansc">

            <br>

            <input type = "submit" value = "cadastrar novo usuario">
        </form>

        <div class = "status">
            <?php
                if(isset($_GET['ok'])){ ?>
                    <p class = "sucesso">Cadastro realizado com sucesso!</p>
                    <?php
                }
            ?>
</body>
</html>