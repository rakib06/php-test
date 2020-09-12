
<?php

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
    
    echo Person::$drinkingAge;
    Person::setDrinkingAge(18);
    echo Person::$drinkingAge;
    $man1 = new Person("Rakibul", "Black", "22");
    echo $man1->getDA();
    
    ?>

</body>
</html>