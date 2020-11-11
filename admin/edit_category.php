<?php
	require '../db/conn.php';
   require 'functions.php';
   require 'classes/DatabaseTable.php';

   $cat = new DatabaseTable('tbl_categories'); 
   $category = $cat->find($pdo, 'id', $_GET['id']);  

   $data = [
      'category' => $category
   ];

   if(isset($_POST['update'])){
      $cat = new DatabaseTable('tbl_categories');
      unset($_POST['update']);
      $cat->update($pdo, $_POST, 'id');
      header('Location:categories.php');
   }


   $title = 'Edit Categories';
   $body = getTemplate('views/edit_category_template.php', $data);

   require 'views/layout.php';
?>