<?php 

require_once('../models/session.php');

$session = new Session();

if(isset($_GET['q'])){
   $_SESSION['currency'] = $_GET['q'];
   header('Location: ' . $_SERVER['HTTP_REFERER']);
   exit();
}

?>