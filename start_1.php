<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo"Php Learning course";?></title>
</head>
<body>
    <h1>Hello</h1>

    <?php 
    // 1--- Basic
    echo "<h1 style=\"color:red;\">Sabikun Nahar Bristy</h1>";
    // 2--- Basic dynamic
    $name = "Sabikun Nahar Bristy";
    $skill= "PHP & Python";
    $hobby= "Travel";
    echo "<h1 style=\"color:red;\"> My name is {$name}. I'm a {$skill} Developer. I Love to {$hobby}.</h1>";


    ?>
</body>
</html>