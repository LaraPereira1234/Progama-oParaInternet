<h2>Bem Vindo </h2>
<hr>
<a href = "sair.php">Sair</a>
<?php
   session_start();
   if( !isset($_SESSION['user_id'])){
    header("Location:login.php");
    exit();
   }
   echo $_SESSION['user_id'];
   echo $_SESSION['nome'];
?>