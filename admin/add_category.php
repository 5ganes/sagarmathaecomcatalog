<?php
	require '../db/conn.php';
   require 'functions.php';
   require 'classes/DatabaseTable.php';

   if(isset($_POST['save'])){
      $cat = new DatabaseTable('tbl_categories');
      unset($_POST['save']);
      $cat->insert($pdo, $_POST);
      echo 'Category Inserted';
   }


   $title = 'Add Categories';
   $body = getTemplate('views/add_category_template.php', []);

   require 'views/layout.php';
?>