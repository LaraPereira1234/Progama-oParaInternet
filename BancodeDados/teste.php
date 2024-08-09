<?php
   include_once("da_user.php");

   if(connection()==null){
    echo "Erro na conexão";
   }else{
    echo "Conexão ok;"

    echo "Insert <hr><br>"
   }

   echo "Id usr".insertUser("Pedro", "pedro", "1234", "2020-10-10");
   echo "Select all users <hr> <prev>";
   print_r(selectAllUsers());
   echo "</prev>";

   echo "<br><hr> User 10 <prev>";
   print_r(selectUser(10));
   echo "</prev>";

   echo "<br><hr> Check login e senha <prev>";
   print_r(selectUser("lara.p2006@aluno.ifsc.edu.br", "12345"));
   echo "</prev>";


?>