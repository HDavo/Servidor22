
<?php
    // require("")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- meter estilo en un fichero aparte -->
    <style>
        body{
            background-color: #EAEAEA;
            font-family: 'Times New Roman', Times, serif;
        }
        #contenido{
            width: 50%;
            background-color: papayawhip;
            margin: 0 auto;
            text-align: center;
        }

    </style>
    <script defer>

    </script>
    <title><?=$title?></title>
</head>
<body>

    <div id="general">
        <nav>p1 p2 ....</nav>
        <div id="contenido">
            <h1><?$pageHeader?></h1>
            <?=$content?>
        </div>
    </div>
</body>
</html>