<?php 

  ini_set('display_errors', 1);
  error_reporting(E_ALL);

  require_once("../models/Product.php");
  require_once("../models/ProductDAO.php");

  ProductDAO::getInstance()->save(new product($_POST['name'], $_POST['value'], $_POST['description'], $_POST['image'], $_POST['inventory']));

  header("Location: ../Dashboard/pagesManager/listProduct.php");

?>