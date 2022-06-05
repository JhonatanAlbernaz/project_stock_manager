<?php 

  ini_set('display_errors', 1);
  error_reporting(E_ALL);

  require_once("../models/Supply.php");
  require_once("../models/SupplyDAO.php");

  var_dump($_POST['id_product']);

  SupplyDAO::getInstance()->save(new supply($_POST['id_product'], $_POST['id_proposal'], $_POST['amount'], $_POST['value']));

  header("Location: ../index.php");

?>