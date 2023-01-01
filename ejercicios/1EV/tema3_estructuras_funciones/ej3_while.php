<?php
    $cosa = "Lorem ipsum dolor sit met, consectetur dipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

    $a = 0;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej3</title>
</head>
<body>
    <div>
        <?php while (strlen($cosa) && ($cosa[$a] != "a" && $cosa[$a] != "A")) { ?>
            <h4><?php echo $cosa[$a] ?> </h4>
                <?php $a++; ?> 
        <?php }?>
    </div>
</body>
</html>