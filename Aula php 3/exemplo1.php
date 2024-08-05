<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <from action = "" method = "get">
        <label for = "txt">Informe um texto</label>
        <input type = "text" id = "txt" name = "texto">
        <input type = "text" name = "change">
        <input type = "submit">
    </form>
    <?php
       if (isset($_GET['texto']) && !isset($_GET['change'])){
          exit();
       }
       session_start();
       if($_GET["change"] == ""){
        echo $_SESSION['txt'];
       }else{
        $_SESSION['texto'] = $_GET['texto']
       }
    ?>
</body>
</html>