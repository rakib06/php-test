<?php
spl_autoload_register('myAutoLoader');

function myAutoLoader($className){
    $path = "classes/";
    $extension = '.class.php';
    $fullpath = $path . $className . $extension;
    
    if (!file_exists($fullpath)){
        // code ..
        echo "hm";
        return false;
        
    }
    include_once $fullpath;
    
}
?>