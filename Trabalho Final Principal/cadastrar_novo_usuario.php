<?php
    include_once ("da_user.php");

    if(!isset($_POST['nome']) || !isset($_POST['email']) || !isset($_POST['senha']) || !isset($_POST['datansc'])){
        header("Location:login.php?erro=2");
        exit();
    }
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $data_nascimento = $_POST['datansc'];

    if( insertUser($nome, $senha, $email, $data_nascimento) >0){
        header("Location:registrar_user.php?ok=1");
    }
?>