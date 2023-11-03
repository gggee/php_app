<?php
$title = "Products";
$prod_name ="Gyokuro";
$articul = "GYK048";
$description = "The smooth, rich green leaves of this tea have a pointed shape at the end, reminiscent of pine needles. 
They are easy to recognize by their appearance. This is the most refined of Japanese teas. 
The drink obtained from this tea is green in color and its taste remains in the mouth for a long time.";
$seller = "TeaMagic";
$price = 499;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="item_stl.css">
    <title><?=$title?></title>
</head>

<body>
    <?php require "menu.php";?>
    <div class="block">
        <p class="title"><?=$prod_name?><p>
        <img src ="img/tea_3.jpg" class="tea_img">
        <p class="info"><b>Articul:</b> <?=$articul?></p>
        <p class="info"><b>Description:</b> <?=$description?></p>
        <p class="info"><b>Seller:</b> <?=$seller?></p>
        <p class="info"><b>Price:</b> <?=$price?>$</p>
    </div>
</body>

</html>