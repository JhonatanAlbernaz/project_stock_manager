<?php 

  ini_set('display_errors', 1);
  error_reporting(E_ALL);

  require_once("../models/User.php");
  require_once("../models/UserDAO.php");

  UserDAO::getInstance()->save(new user($_POST['name'], $_POST['email'], $_POST['password'], $_POST['userType'], $_POST['numberRecord']));

  header("Location: ../index.php");

?>