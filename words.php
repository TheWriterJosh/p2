<?php
      $travel = array("wanderlust ", "adventure ", "hitchhiking ", "hostel ", "hotel ", "train ", "bus ", "plane ", "ocean ", "europe ", "asia ", "africa ", "beach ", "history ", "art ", "culture ", "backpacker ", "suitcase ", "passport ");
      $numberOfWords = $_POST['numberOfWords'];

        if ($numberOfWords == 1) {
            shuffle($travel);
            echo $travel[0];
        } else if ($numberOfWords == 2) {
            shuffle($travel);
            for ($i = 0; $i < 2; ++$i) {
                echo (str_replace(' ', '-', $travel[$i]));
            }
        } else if ($numberOfWords == 3) {
            shuffle($travel);
            for ($i = 0; $i < 3; ++$i) {
                echo (str_replace(' ', '-', $travel[$i]));
            }
        } else if ($numberOfWords == 4) {
            shuffle($travel);
            for ($i = 0; $i < 4; ++$i) {
                echo (str_replace(' ', '-', $travel[$i]));
            }
        } else if ($numberOfWords > 4) {
            echo "";
            return false;
        } else if (!is_numeric($numberOfWords)) {
            echo "";
            return false;
        }


?>
