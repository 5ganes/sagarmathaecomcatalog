<?php
	require '../db/conn.php';
   require 'functions.php';

   $title = 'Manage Categories';
   
   $categories = $conn->prepare('SELECT * FROM tbl_categories');
   $categories->execute();
   $data = [
   	'categories' => $categories
   ];
   $body = getTemplate('views/category_template.php', $data);

   require 'views/layout.php';
?>