<?php 

  ini_set('display_errors', 1);
  error_reporting(E_ALL);

  require_once("../models/Proposal.php");
  require_once("../models/ProposalDAO.php");

  $id = $_GET['idProposal'];

  ProposalDAO::getInstance()->dropProposal($id);

  header("Location: ../Dashboard/pagesManager/listProduct.php");

?>