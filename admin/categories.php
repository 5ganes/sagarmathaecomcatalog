<?php
	require '../db/conn.php';
   require 'functions.php';
   require 'classes/DatabaseTable.php';

   $title = 'Manage Categories';
   
   $cat = new DatabaseTable('tbl_categories');
   $categories = $cat->findAll($pdo);
   $data = [
   	'categories' => $categories
   ];
   $body = getTemplate('views/category_template.php', $data);

   require 'views/layout.php';
?>