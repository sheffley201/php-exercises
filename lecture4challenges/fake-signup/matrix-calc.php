<?php
    session_start();
    if (!isset($_SESSION['name'])) {
        header("Location: index-view.php?error=1");
    }
    require "banner.php";
    $arr = array_values($_POST);
    $isTwoByTwo = false;
    if ($arr[2] == null) {
        $isTwoByTwo = true;
    }
    require 'matrix-calc.view.php';
    if ($isTwoByTwo != true) {
        if ($arr[18] == 'add') {
            for ($i = 0; $i < 9; $i++) {
                echo $arr[$i] + $arr[$i + 9].", ";
                if (($i + 1) % 3 == 0) {
                    echo "<br>";
                }
            }
        } else if ($arr[18] == 'subtract') {
            for ($i = 0; $i < 9; $i++) {
                echo $arr[$i] - $arr[$i + 9].", ";
                if (($i + 1) % 3 == 0) {
                    echo "<br>";
                }
            }
        } else if ($arr[18] == 'multiply') {
            for ($i = 0; $i < 9; $i++) {
                echo $arr[$i] * $arr[$i + 9].", ";
                if (($i + 1) % 3 == 0) {
                    echo "<br>";
                }
            }
        } else if ($arr[18] == 'scalar') {
            for ($i = 0; $i < 9; $i++) {
                echo $arr[$i] * $arr[$i + 9].", ";
                if (($i + 1) % 3 == 0) {
                    echo "<br>";
                }
            }
        } else if ($arr[18] == 'determinate') {
            echo $arr[0] * ($arr[4] * $arr[8] - $arr[5] * $arr[7]) - $arr[1] * ($arr[3] * $arr[8] - $arr[5]* $arr[6]) + $arr[2] * ($arr[3] * $arr[7] - $arr[4] * $arr[6]).", ";
            echo $arr[9] * ($arr[13] * $arr[17] - $arr[14] * $arr[16]) - $arr[10] * ($arr[12] * $arr[17] - $arr[14]* $arr[15]) + $arr[11] * ($arr[12] * $arr[16] - $arr[13] * $arr[15]);
        } else if ($arr[18] == 'inverse') {
            $determinateOne = $arr[0] * ($arr[4] * $arr[8] - $arr[5] * $arr[7]) - $arr[1] * ($arr[3] * $arr[8] - $arr[5]* $arr[6]) + $arr[2] * ($arr[3] * $arr[7] - $arr[4] * $arr[6]);
            $determinateTwo = $arr[9] * ($arr[13] * $arr[17] - $arr[14] * $arr[16]) - $arr[10] * ($arr[12] * $arr[17] - $arr[14]* $arr[15]) + $arr[11] * ($arr[12] * $arr[16] - $arr[13] * $arr[15]);
            for ($i = 0; $i < 18; $i++) {
                if ($i < 9) {
                    echo $arr[$i] * (1 / $determinateOne).", ";
                } else {
                    echo $arr[$i] * (1 / $determinateTwo).", ";
                }
                if (($i + 1) % 3 == 0) {
                    echo "<br>";
                }
            }
        }
    } else {
        if ($arr[18] == 'add') {
            echo $arr[0] + $arr[9].", ".$arr[1] + $arr[10]."<br>".$arr[3] + $arr[12].", ".$arr[4] + $arr[13];
        } else if ($arr[18] == 'subtract') {
            echo $arr[0] - $arr[9].", ".$arr[1] - $arr[10]."<br>".$arr[3] - $arr[12].", ".$arr[4] - $arr[13];
        } else if ($arr[18] == 'multiply') {
            echo $arr[0] * $arr[9].", ".$arr[1] * $arr[10]."<br>".$arr[3] * $arr[12].", ".$arr[4] * $arr[13];
        } else if ($arr[18] == 'scalar') {
            echo $arr[0] * $arr[9].", ".$arr[1] * $arr[10]."<br>".$arr[3] * $arr[12].", ".$arr[4] * $arr[13];
        } else if ($arr[18] == 'determinate') {
            echo $arr[0]* $arr[4] - $arr[1] * $arr[3].", ";
            echo $arr[9]* $arr[13] - $arr[10] * $arr[12];
        } else if ($arr[18] == 'inverse') {
            $determinateOne = $arr[0]* $arr[4] - $arr[1] * $arr[3];
            $determinateTwo = $arr[9]* $arr[13] - $arr[10] * $arr[12];
            echo $arr[0] * (1/$determinateOne).", ".$arr[1] * (1/$determinateOne)."<br>".$arr[3] * (1/$determinateOne).", ".$arr[4] * (1/$determinateOne)."<br>".$arr[9] * (1/$determinateTwo).", ".$arr[10] * (1/$determinateTwo)."<br>".$arr[12] * (1/$determinateTwo).", ".$arr[13] * (1/$determinateTwo);
        }
    }
?>