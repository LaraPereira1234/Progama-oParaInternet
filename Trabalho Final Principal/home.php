<?php
    session_start();
    if(!isset($_SESSION['userid'])){
      header("Location:login.php");
      exit();
    }
    include_once "da_user.php"
    $user = selectUser($_SESSION['userid']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>
</head>
<body>
   <h2>Bem Vindo! <?php echo $user['id']. " -  ". $user['name']; ?> </h2>
   <div class = "menu">
      <a href = "sair.php">Sair</a>
   </div>
   <div id = "boxmain">
      <h2>Lista usuarios</h2>
      <?php
         $users = selectAllUsers();
      ?>
      <table>
         <tr>
            <td>id</td>
            <td>nome</td>
            <td>email</td>
            <td>datanascimento</td>
         </tr>''
         <?php
            foreach($users as $user){
         ?>
            <tr>
               <td><a href = "editar_user?id=<?php echo $user['id']; ?>">
                   <?php echo $user['id']; ?>
                  </a>
               </td>
               <td><a href = "editar_user?id=<?php echo $user['nome']; ?>">
                  <?php echo $user['nome']; ?>
                  </a>
               </td>
               <td><a href = "editar_user?id=<?php echo $user['email']; ?>">
                  <?php echo $user['email']; ?>
                  </a>
               </td>
               <td><a href = "editar_user?id=<?php echo $user['datanascimento']; ?>">
                  <?php echo $user['datanascimento']; ?>
                  </a>
               </td>
            </tr>
            <?php
            }
         ?>
      </table>
   </div>
</body>
</html>

