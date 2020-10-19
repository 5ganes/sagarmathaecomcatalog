<?php
	function getTemplate($filename, $data){
        extract($data);
        ob_start();
        require $filename;
        $content = ob_get_clean();
        return $content;
    }
?>