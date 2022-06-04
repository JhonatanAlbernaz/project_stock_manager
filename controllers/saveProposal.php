<?php 

  ini_set('display_errors', 1);
  error_reporting(E_ALL);

  require_once("../models/Proposal.php");
  require_once("../models/ProposalDAO.php");

  ProposalDAO::getInstance()->save(new proposal($_POST['id_provider'], $_POST['amount'], $_POST['value']));

  header("Location: ../Dashboard/provider.php");

?>