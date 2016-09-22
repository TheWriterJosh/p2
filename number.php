<?php
    $number = $_POST["number"];
    $numberOfWords = $_POST["numberOfWords"];
    if (empty($number)) {
        return false;
        echo "";
    } else {
        $randomNumber = rand(1, 2000);
        echo $randomNumber;
    }

#and (($numberOfWords <= 4) || (is_numeric($numberOfWords))))
?>
