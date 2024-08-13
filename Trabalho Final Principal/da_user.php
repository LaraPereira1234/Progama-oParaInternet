<?php
    include_once("connection.php");

    function insertUser($nome, $senha, $email, $data_nascimento){
        $pdo = connection();
        $sql = "INSERT INTO users (nome, email, senha, datanascimento) VALUES(:nome, :email, :senha, :dtnasc)";
        $stmt = $pdo->prepare($sql); 
        $stmt->execute( Array(':nome'=>$nome, ':email' => $email, ':senha' => $senha, ':dtnasc' = $data_nascimento));
        return $pdo->lastInsertId();
    }

    function selectAllUsers(){
        $pdo = connection();
        $sql = "SELECT * FROM users";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt-> fecthAll(); 
    }

    function selectAllUsers($id){
        $pdo = connection();
        $sql = "SELECT * FROM users WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute( Array(':id' => $id));
        return $stmt-> fecthAll(PDO::FETCH_ASSOC)[0]; 
    }

    function checkUser($email, $senha){
        $pdo = connection();
        $sql = "SELECT * FROM users WHERE users.email = :email AND users.senha = :senha";
        $stmt = $pdo->prepare($sql);
        $stmt->execute( Array(':email' => $email, ':senha' => $senha));
        return $stmt-> fecthAll(PDO::FETCH_ASSOC)[0]; 
    }
?>