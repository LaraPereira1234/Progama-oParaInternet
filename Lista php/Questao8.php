<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "" method = "get">
        <label for = "number" name = "mes" id = "mes">
        <input type = "number" name = "mes" id = "mes">
        <input type = "submit" value = "ger nome canonico">
    </form>
    
    <?php
        if(!isset($_GET["mes"]) && $_GET["mes"]>0 && $_GET["mes"] <= 12){
            exit;
        }
        $mes = intval($_GET["mes"]);

        $meses = [1=>"janeiro", 2=>"fevereira", 3=>"março", 4=>"abril"];
        echo $meses[$mes];
    ?>
</body>
</html>