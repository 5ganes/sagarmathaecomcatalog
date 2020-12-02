<?php
	require '../db/conn.php';

	if(!isset($_SESSION['sessUserId'])){
        header('Location:login.php');
   }

   require 'functions.php';

   $title = 'Product Home';
   $body = getTemplate('views/home.php', []);

   require 'views/layout.php';
?>