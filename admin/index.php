<?php
    require 'functions.php';

    $title = 'Product Home';
    $body = getTemplate('views/home.php', []);

    require 'views/layout.php';
?>