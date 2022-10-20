<?php
    function generaSelect(array $datos, int $selected = -1){

        ?>
            <select name="ciudad" id="">
        <?php
            array_walk($datos, function($value, $key) {
                $sel=($value==$selected)?'selected':'';
                echo "<option value='$value' $tipo >$key </option>";
            })
        
        ?>
        </select>
        <?php
    }
?>