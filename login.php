<?php

session_start();

if($_SERVER['REQUEST_METHOD'] === $_POST)
    $username = $_POST['user'];
    $password = $_POST['wachtwoord'];

    $stmt = $pdo->prepare("SELECT * FROM users where username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($user && password_verify($password, $user["password"])) {

        $_SESSION["user_id"] = $user["id"];
        $_SESSION["username"] = $user["username"];
        
        header("Location: protected.php");
        exit;
    } else {
        echo "Onjuiste login.";
    }


    


?>