<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    /*
    include "includes/person.inc.php";

    $pet01 = new Pet();
    echo $pet01->owner(); 
    */
    
    // step 2

    include "includes/man.inc.php";
    // $man1 = new Man();
    $man1 = new Man("Rakibul", "Black", "22");
    echo $man1->getName(); // name = property
    echo $man1->eyeColor;
    $man1->setName("Hasan");
    echo  $man1->getName();


    ?>

</body>
</html>