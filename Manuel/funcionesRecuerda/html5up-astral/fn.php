<?php
    function inputVariable($number, $type, $name, $value, $placeholder){

        for($i=1;$i<=$number;$i++){
            echo "
                <input class='mb-3 p-3 col-8' type='$type' name='$name' value='' placeholder='$placeholder' required><br>        
            ";
        }        
    }
?>