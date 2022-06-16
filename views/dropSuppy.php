<?php 

  ini_set('display_errors', 1);
  error_reporting(E_ALL);

  require_once("../models/Supply.php");
  require_once("../models/SupplyDAO.php");

  $id = $_GET['idSupply'];

  SupplyDAO::getInstance()->dropSupply($id);

  header("Location: ../Dashboard/pagesManager/listProduct.php");

?>