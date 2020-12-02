<?php
	require '../db/conn.php';

   if(!isset($_SESSION['sessUserId'])){
        header('Location:login.php');
   }

   require 'functions.php';
   require 'classes/DatabaseTable.php';

   $cat = new DatabaseTable('tbl_categories');

   if(isset($_GET['id'])){
      $cat -> delete($pdo, 'id', $_GET['id']);
      header('Location:categories.php?type=msg&msg=Success : Category Deleted Successfully');
   }

   $title = 'Manage Categories';

   $categories = $cat->findAll($pdo);
   $data = [
   	'categories' => $categories
   ];
   $body = getTemplate('views/category_template.php', $data);

   require 'views/layout.php';
?>