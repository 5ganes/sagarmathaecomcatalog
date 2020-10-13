<?php

    function getTemplate($filename, $data){
        ob_start();
        require $filename;
        $content   = ob_get_clean();
        return $content;
    }
    $data = [];
    $title = 'Admin Control';
    $content = getTemplate('views/templates/home.php', $data);
    

    require 'views/templates/layout.php';
?>