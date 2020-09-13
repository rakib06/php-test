<?php
spl_autoload_register('myAutoLoader');

function myAutoLoader($className){
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    // $path = "classes/";
    $extension = '.class.php';
    
    if(strpos($url, 'includes')!== false ){
        $path = '../classes/';
    }
    else{
        $path = "classes/";
    }

    $fullpath = $path . $className . $extension;
    

    if (!file_exists($fullpath)){
        // code ..
        echo "hm";
        return false;
        
    }
    include_once $fullpath;
    
    }

?>