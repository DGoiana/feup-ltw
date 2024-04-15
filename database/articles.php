<?php 
   function getAllArticles($db){
      $stmt = $db->prepare(
         "SELECT product.*, users.avatar FROM product LEFT JOIN users ON product.userID = users.userID"
      );
      $stmt->execute();
      $articles = $stmt->fetchAll();
      return $articles;
   }

   function getUserArticles($db, $userID){
      $stmt = $db->prepare(
         "SELECT product.*, users.avatar FROM product LEFT JOIN users ON product.userID = users.userID WHERE product.userID = :userID"
      );
      $stmt->bindParam(':userID', $userID);
      $stmt->execute();
      $userArticles = $stmt->fetchAll();
      return $userArticles;
   }
?> 
