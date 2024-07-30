 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action = "index.php">
        <input id = "idvariavelA" type = "text" name = "nome" value = <?php 
        if (isset($_GET["nome"])){
            echo $_GET["nome"];
        }
        ?>
        >
        <input id = "idvariavelB" type = "text" name = "sobrenome" value = <?php 
        if (isset($_GET["sobrenome"])){
            echo $_GET["sobrenome"];
        }
        ?>
        >
        <input type = "submit" value = "Submeter dados para servidor">
    </form>
    <?php
        if((isset($_GET["nome"])) && (isset($_GET["sobrenome"]))){
            $a = $_GET["nome"];
            $b = $_GET["sobrenome"];
            
            /*echo "Olá Mundão!";
            $nome = "Baunilha"; //cria a variável
    
            echo $nome; // imprime a variavel
            $a = 2;
            $b = 3; */
            
            echo "Soma A + B".$a + $b;
        }
    ?>
</body>
</html>