<?php 

    /*Crea una página web que escriba span con números aleatorios entre 0 y 100,
    el proceso parará cuando el número acabe en 17 o sea primo. */


    function crear($num){
        $primo = true;

        for ($i=2; $i <= $num/2 && $primo; $i++) { 
            if (($num % $i)== 0) {
                $primo = false;
            }
        }
        return $primo;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej4</title>
</head>
<body>
    <div>
        <?php do { ?>
            <?php $num = mt_rand(0,100); ?>
            <?php echo $num."<br>"; ?>
        <?php } while ($num !=17 || !$primo($num));?>
    </div>
</body>
</html>