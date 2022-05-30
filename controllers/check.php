<?php

    require_once("../models/User.php");
    require_once("../models/UserDAO.php");

    session_start();

    if($_SESSION["userType"] == 1) {

        header("Location: ../Dashboard/index.php");

    }else {

        $_SESSION["erro_login"] = "Login invalido, senha ou email invalidos";
        header("Location: ../index.php");

    }
    
?>