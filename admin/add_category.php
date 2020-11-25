<?php
	require '../db/conn.php';
   require 'functions.php';
   require 'classes/DatabaseTable.php';

   if(isset($_POST['save'])){
      // print_r($_POST); die();
      $error = '';
      if($_POST['name'] == ''){
         $error = 'Enter Category Name';
      }
      if($error == ''){
         $cat = new DatabaseTable('tbl_categories');
         unset($_POST['save']);
         $cat->insert($pdo, $_POST);
         header('Location:categories.php?type=msg&msg=Category Insserted');
      }
      else{
         header('Location:categories.php?type=err&msg='.$error);
      }
   }


   $title = 'Add Categories';
   $body = getTemplate('views/add_category_template.php', []);

   require 'views/layout.php';
?>