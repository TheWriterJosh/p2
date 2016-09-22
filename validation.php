<?php
    $wordsValue = "";
    $wordsError = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $wordsValue = test_input($_POST["numberOfWords"]);
    }
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["numberOfWords"]) or (!is_numeric($_POST["numberOfWords"])) or (($_POST["numberOfWords"]>4))) {
            $wordsError = "Please enter a number between 1 and 4.";
        } else {
            $wordsValue = test_input($_POST["numberOfWords"]);
        }
    }

 ?>
