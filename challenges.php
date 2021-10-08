<?php
    //challenge 1
    echo "Challenge 1";
    echo
    "<pre>
        These are what I \"ordered\" -
        \t 1. My son's watch
        \t 2. 12 cans of soda
        \t 3. Some chips
        \t\t Lays
        \t\t Pringles \n
        Yes. The order id is \\5412\\
    </pre>";

    //challenge 2
    echo "Challenge 2 <br>";
    echo "125 divided by pi is ". 125/pi();
    echo "<br>The current world population is about 7000000000<br>";
    echo "Lets say 7.139 % of them are financially stable<br>";
    echo "That makes 7e9 * 7.139 / 100 = ". 7000000000 * 7.139 / 100 ." people<br>";
    echo "If 499730000 people each donate $0.01 a day,<br>";
    echo "imagine how much money we can collect!<br>";
    echo "499730000 * 0.01 would be ". 499730000 * .01 ." dollars a day!<br>";
    echo "Which is equivalent to ". 4997300 * 365 ." dollars per year! <br><br>";

    //challenge 3
    echo "Challenge 3<br>";
    $value1 = 2;
    $value2 = 2;
    $output = $value1 == $value2 ? $value1 * 6 : $value1 + $value2;
    echo "Input 1: ".$value1."<br>Input 2: ".$value2."<br>";
    echo "Output: ".$output."<br><br>";

    //challenge 4
    echo "Challenge 4<br>";
    $input = 50;
    $output2 = $input > 51 ? ($input - 51) * 3 : 51 - $input;
    echo "Input: $input <br>Output: $output2 <br><br>";

    //challenge 5
    echo "Challenge 5<br>";
    $value3 = 15;
    $value4 = 15;
    $output3 = $value3 + $value4 == 30 ? true : false;
    echo "Input 1: $value3 <br>Input 2: $value4 <br> Output: $output3 <br><br>";

    //challenge 6
    echo "Challenge 6<br>";
    $value5 = 181;
    $output4 = abs($value5 - 100) <= 10 || abs($value5 - 200) <= 10 ? true : false;
    echo "Input: $value5 <br>Output: $output4 <br><br>";

    //challenge 7
    echo "Challenge 7<br>";
    $value6 = 5;
    $output5 = $value6 % 3 == 0 || $value6 % 7 == 0 ? true : false;
    echo "Input: $value6 <br>Output: $output5 <br><br>";

    //challenge 8
    echo "Challenge 8<br>";
    $value7 = 120;
    $value8 = 5;
    $output6 = false;
    if ($value7 < 0 && $value8 > 100) {
        $output6 = true;
    } else if ($value7 > 100 && $value8 < 0) {
        $output6 = true;
    }
    echo "Input 1: $value7 <br>Input 2: $value8 <br>Output: $output6 <br><br>";

    //challenge 9
    echo "Challenge 9<br>";
    $arr = [12, 30, 65];
    $output7 = false;
    for ($i = 0; $i < 3; $i++) {
        if ($arr[$i] >= 20 && $arr[$i] <= 50) {
            $output7 = true;
        }
    };
    echo "Input: $arr[0], $arr[1], $arr[2] <br> Output: $output7 <br><br>";

    //challenge 10
    echo "Challenge 10<br>";
    $value9 = 21;
    $output8 = 0;
    if ($value9 % 3 == 0 ^ $value9 % 7 == 0) {
        $output8 = 1;
    }
    echo "Input: $value9 <br>Output: $output8 <br><br>";

    //challenge 11
    echo "Challenge 11<br>";
    $value10 = 38;
    $output9 = false;
    if ($value10 % 10 >= 8 || $value10 % 10 <= 2) {
        $output9 = true;
    }
    echo "Input: $value10 <br>Output: $output9 <br><br>";

    //challenge 12
    echo "Challenge 12<br>";
    $str = "";
    for ($i = 0; $i < 7; $i++) {
        $str = $str."#";
        echo $str."<br>";
    }
    echo "<br>";

    //challenge 13
    echo "Challenge 13<br>";
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 != 0 && $i % 5 != 0) {
            echo $i;
        }
        if ($i % 3 == 0) {
            echo "Fizz";
        }
        if ($i % 5 == 0) {
            echo "Buzz";
        }
        echo "<br>";
    }
    echo "<br>";

    //challenge 14
    echo "Challenge 14<br>";
    for ($i = 1; $i <= 50; $i++) {
        echo $i."<br>";
    }
    echo "---<br>";
    for ($i = 0; $i < 25; $i++) {
        echo $i."<br>";
    }
    echo "---<br>";
    for ($i = 0; $i < 25; $i++) {
        if ($i % 2 != 0) {
            echo $i."<br>";
        }
    }
    echo "---<br>";
    for ($i = 0; $i < 25; $i++) {
        if ($i % 3 == 0) {
            echo $i."<br>";
        }
    }
    echo "---<br>";
    for ($i = 0; $i <= 50; $i++) {
        if ($i % 5 == 0) {
            echo $i."<br>";
        }
    }
    echo "---<br>";
    for ($i = 0; $i <= 50; $i++) {
        if ($i % 2 == 0 ^ $i % 3 == 0) {
            echo $i."<br>";
        }
    }
    echo "---<br>";
    for ($i = 0; $i <= 100; $i++) {
        if ($i % 2 == 0 && $i % 3 == 0 & $i % 12 != 0) {
            echo $i."<br>";
        }
    }
    echo "<br>";

    //challenge 15
    echo "Challenge 15<br>";
    for ($i = 50; $i >= 1; $i--) {
        echo $i."<br>";
    }
    echo "---<br>";
    for ($i = 25; $i >= 0; $i--) {
        echo $i."<br>";
    }
    echo "---<br>";
    for ($i = 25; $i > 0; $i--) {
        if ($i % 2 != 0) {
            echo $i."<br>";
        }
    }
    echo "---<br>";
    for ($i = 25; $i > 0; $i--) {
        if ($i % 3 == 0) {
            echo $i."<br>";
        }
    }
    echo "---<br>";
    for ($i = 50; $i >= 0; $i--) {
        if ($i % 5 == 0) {
            echo $i."<br>";
        }
    }
    echo "---<br>";
    for ($i = 50; $i >= 0; $i--) {
        if ($i % 2 == 0 ^ $i % 3 == 0) {
            echo $i."<br>";
        }
    }
    echo "---<br>";
    for ($i = 100; $i >= 0; $i--) {
        if ($i % 2 == 0 && $i % 3 == 0 & $i % 12 != 0) {
            echo $i."<br>";
        }
    }
    echo "<br>";

    //challenge 16
    echo "Challenge 16<br>";
    for ($i = 1; $i <= 10; $i++) {
        echo "3 * $i = ". 3 * $i ."<br>";
    }
    echo "<br>";

    //challenge 17?
    echo "Challenge 17<br>";
    for ($i = 1; $i <= 10; $i++) {
        echo "17 * $i = ". 17 * $i ."<br>";
    }
?>