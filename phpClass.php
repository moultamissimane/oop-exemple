<?php
 require 'animalClass.php';
 require 'catClass.php';
 require 'lionClass.php';

$cat  = new Cat('Canirval', 'Meat');
$lion = new Lion('Canirval', 'Meat');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="display:flex;justify-content:center;margin-top:6rem; background-color: black;">
    <div style="color:white; ">

    <div style="background-color: brown;"><?php echo '<i>Cat :</i> <br>';?>
        <?php echo 'The Cat belongs to the ' . $cat->get_family() . ' family and eats ' . $cat->get_food() . '<br><br>';?>
    </div>  
    <div style="background-color:cornflowerblue;">
        <?php echo '<i>Lion :</i> <br>';?>
          <?php echo 'The Lion belongs to the ' . $lion->get_family() . ' family and eats ' . $lion->get_food();?>
    
    </div>



</body>
</html>

