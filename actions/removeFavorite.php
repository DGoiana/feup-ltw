<?php
   session_start();

   require_once("../models/favorite.php");
   require_once("../database/remove_from_favorites.php");

   if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $userId = $_POST['userId'];
      $articleId = $_POST['articleId'];

      if(empty($userId) || empty($articleId)){
         die(header('Location: ../#'));
      }

      if(!removeFavorite($userId, $articleId)) die(header('Location: ../#'));
      
      header('Location: ../product.php?id=' . $articleId);   
   }
?>