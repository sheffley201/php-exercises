<?php
    //Spencer Heffley
    //challenge 1 (slide 38)
    echo "Challenge 1:<br>";
    echo "Min of two:<br>";
    function minOfTwo($first, $second) {
        if ($first <= $second) return $first;
        else if ($second < $first) return $second;
    }
    function minOfThree($first, $second, $third) {
        return minOfTwo(minOfTwo($first, $second), $third);
    }
    function minOfEither($first, $second, $third = INF) {
        return minOfThree($first, $second, $third);
    }
    echo "Which is lower? 1 or 5. ".minOfTwo(1, 5)."<br>";
    echo "Min of three:<br>";
    echo "Which is lower? 4, 6 or 2. ".minOfThree(4, 6, 2)."<br>";
    echo "Min of two or three:<br>";
    echo "Minimum of 4 and 7: ".minOfEither(4, 7)."<br>";
    echo "Minimum of 3, 7, and 9 using the same function: ".minOfEither(3, 7, 9)."<br>";
    echo "<br>";

    //challenge 2 (slide 39)
    echo "Challenge 2: <br>";
    function nthPlace($n, $a) {
        $n = strval($n);
        return $n[strlen($n) - $a - 1];
    }
    echo "n = 1541, a = 2. output: ".nthPlace(1541, 2)."<br>";
    echo "n = 415, a = 1. output: ".nthPlace(415, 1)."<br>";
    echo "n = 7474, a = 0. output: ".nthPlace(7474, 0)."<br>";
    echo "<br>";

    //challenge 3 (slide 40/41)
    echo "Challenge 3:<br>";
    function isEven($num) {
        if ($num == 0) return "true";
        $num -= 2;
        if ($num > 1) return isEven($num);
        else if ($num == 1 || $num < 0) return "false";
        else if ($num == 0) return "true";
    }
    echo "Is 75 even? ".isEven(75)."<br>";
    echo "Is 50 even? ".isEven(50)."<br>";
    echo "Is -1 even? ".isEven(-1)."<br>";
    echo "<br>";

    //challenge 4 (slide 42)
    echo "Challenge 4:<br>";
    function sequenceOne($n, $start = 2, $i = 1) {
        if ($i == $n) return $start;
        else return sequenceOne($n, $start + $i * 4, $i + 1);
    }
    function sequenceTwo($n, $start = 1, $i = 1) {
        if ($i == $n) return $start;
        else {
            $i++;
            return sequenceTwo($n, $start * $i, $i);
        }
    }
    function fibonacci($n, $first = 0, $second = 1, $i = 2) {
        if ($n == 1) return 1;
        else if ($i == $n) return $first + $second;
        else return fibonacci($n, $second, $first + $second, $i + 1);
    }
    echo "The 9th number in the first sequence is ".sequenceOne(9)."<br>";
    echo "The 9th number in the second sequence is ".sequenceTwo(9)."<br>";
    echo "The 13th number in the fibonacci sequence is ".fibonacci(13)."<br>";
    echo "HCF and LCM:<br>";
    function highFactor($x, $y) {
        for ($i = min($x, $y); $i > 0; $i--) {
            if ($x % $i == 0 && $y % $i == 0) {
                return $i;
            }
        }
    }
    function lowestMult($x, $y, $factor = 1) {
        $mult = max($x, $y) * $factor;
        if ($mult % $x == 0 && $mult % $y == 0) return $mult;
        else return lowestMult($x, $y, $factor + 1);
    }
    echo "The highest common factor of 50 and 20 is ".highFactor(50,20)."<br>";
    echo "The lowest common multiple of 5 and 12 is ".lowestMult(5, 12)."<br>";
    echo "<br>";

    //challenge 5 (slide 43)
    echo "Challenge 5:<br>";
    function multTable($x, $a, $b) {
        for ($i = $a; $i <= $b; $i++) {
            echo "$x * $i = ". $x * $i."<br>";
        }
    }
    echo "Regular Multiplication Table:<br>";
    multTable(6, 2, 23);
    echo "<br>";

    //challenge 6 (slide 44/45)
    echo "Challenge 6:<br>";
    function multMultTable($x, $y, $a, $b) {
        for ($i = $x; $i <= $y; $i++) {
            for ($j = $a; $j <= $b; $j++) {
                echo "$i * $j = ". $i * $j."<br>";
            }
            echo "<br>";
        }
    }
    echo "Multi multiplication table:<br>";
    multMultTable(1, 4, 1, 5);

    //challenge 7 (slide 46)
    echo "Challenge 7:<br>";
    function countBs ($s) {
        $b = 0;
        for ($i = 0; $i < strlen($s); $i++) {
            if ($s[$i] === "B") $b++;
        }
        return $b;
    }
    function countChar ($s, $letter) {
        $charCount = 0;
        for ($i = 0; $i < strlen($s); $i++) {
            if ($s[$i] === $letter) $charCount++;
        }
        return $charCount;
    }
    echo "Counting B's:<br>";
    echo "Number of B's in JDBBDJDBBSHFBDBBB: ".countBs("JDBBDJDBBSHFBDBBB")."<br>";
    echo "Counting any letter:<br>";
    echo "Number of R's in RRJRNRBBRRRRJLDOER: ".countChar("RRJRNRBBRRRRJLDOER", "R")."<br>";

    //leetcode problem 1
    function reverse($x) {
        $min = -2147483648;
        $max = 2147483647;
        if ($x == 0) {
            return 0;
        }
        if ($x > 0) {
            $rev = intval(strrev($x));
            if ($rev < $max) {
                return $rev;
            } else {
                return 0;
            }
        } else if ($x < 0) {
            $rev1 = strrev($x);
            $rev = substr($rev1, 0, strlen(strval($x)) - 1) * -1;
            if ($rev > $min) {
                return $rev;
            } else {
                return 0;
            }
        }
    }

    //leetcode problem 2
    function numberOfMatches($n) {
        $matches = 0;
        while ($n > 1) {
            if ($n % 2 == 0) {
                $matches += $n / 2;
                $n /= 2;
            } else {
                $matches += ($n - 1) / 2;
                $n = ($n - 1) / 2 + 1;
            }
        }
        return $matches;
    }

    //leetcode problem 3
    function maximum69Number ($num) {
        $num = strval($num);
        for ($i = 0; $i < strlen($num); $i++) {
            if ($num[$i] == 6) {
                $num[$i] = 9;
                break;
            }
        }
        return intval($num);
    }
?>
