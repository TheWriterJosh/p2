<?php
    $symbolArray = array("?", "#", "!", "~", "+", "=");
    if (!empty($_POST['symbol'])) {
        shuffle($symbolArray);
        echo $symbolArray[0];
    } else if (empty($_POST['symbol'])) {
        echo "";
    }
?>
