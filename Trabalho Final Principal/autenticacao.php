<?php
   include_once("da_user.php");

   if(!isset($_POST['email']) && !isset($_POST['senha'])){
    echo "
          <script>
          window.alert('informe login e senha');
          window.location.href = 'login.php'
          </script>";
          exit();
   }

   $usr=checkUser($_POST['email'], $_POST['senha']);
   if(count($usr) == 0){
    echo "login e senha invalidos"
   }else{
    echo "login e senha ok"
    session_start();
    $usr = $usr;

    //var_dump($usr[0].[id]);

    $SESSION['userid'] = $usr["id"]
    header("Location:login.php");
   }
?>