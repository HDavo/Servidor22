<?php

    function formatFormUser(array $user){

        ?> //salida de php para escribir html
        <form action="" method="get">
            <?php
                //<input name='key' value='value' type='text|number' >

                array_walk($user, function($value, $key) {
                    $tipo=(is_int($value))?'number':'text';
                    echo "<input name='$key' value='$value' type='$tipo' >";
                })
            ?>
        </form>
      <?php

    }
?>