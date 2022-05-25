<?php

    require_once("../models/User.php");
    require_once("../models/UserDAO.php");
    
    $emailcheck = $_POST["email"];
    $passwordcheck = $_POST["password"];

    $user = UserDAO::getInstance()->findbyemail($emailcheck);

    session_start();

    if($passwordcheck == $user->password) {

        $_SESSION["logedIn"] = true;
        $_SESSION['id'] = $user->id;
        $_SESSION["email"] = $emailcheck;
        $_SESSION["userType"] = $user->userType;
        $_SESSION["name"] = $user->name;

        header("Location: ../Dashboard/index.php");

    }else {

        $_SESSION["erro_login"] = "Login invalido, senha ou email invalidos";
        header("Location: ../index.html");

    }
    
?>