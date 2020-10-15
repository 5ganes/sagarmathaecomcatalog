<?php
    function getTemplate($filename){
        ob_start();
        require $filename;
        $content = ob_get_clean();
        return $content;
    }
    $title = 'Product Home';

    $body = getTemplate('/views/home.php');

    require 'views/layout.php';
?>