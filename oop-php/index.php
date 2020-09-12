<?php
    declare(strict_types = 1);
    include 'includes/autoloader.inc.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    
    //echo Person::$drinkingAge;
    //Person::setDrinkingAge(18);
    //echo Person::$drinkingAge;
    $man1 = new Person\Person("Rakibul", "Black", "22");
    echo $man1->getDA();
    
    // Step New 
    try{
        $man1->setName(2);
        echo $man1->getName();
    }
    catch (TypeError $e) {
        echo "Error!: " . $e->getMessage();
    }
    
    

    ?>

</body>
</html>