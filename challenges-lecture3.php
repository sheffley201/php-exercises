<?php
    //slide 65 challenges
    //challenge 1
    echo "<h1>Challenges</h1>";
    echo "Challenge 1:<br>";
    $sumArr = array(1, 6, 8, 23, 4, 56);
    $sumOfArr = 0;
    foreach($sumArr as $val) {
        $sumOfArr += $val;
    }
    print_r($sumArr);
    echo "<br>";
    echo $sumOfArr."<br>";
    echo "<br>";

    //challenge 2
    echo "Challenge 2:<br>";
    $fib = array();
    function fibonacci($n, $arr) {
        if ($n == 1 || $n == 2) return 1;
        else return $arr[count($arr) - 1] + $arr[count($arr) - 2];
    }
    for ($i = 1; $i <= 1000; $i++) {
        $fib[] = fibonacci($i, $fib);
    }
    echo "The 5th number in the fibbonaci sequence is $fib[5]<br>";
    echo '<br>';

    //challenge 3
    echo "Challenge 3:<br>";
    $numArr = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
    function rmElement($arr, $n) {
        $first = array_slice($arr, 0, $n);
        $second = array_slice($arr, $n + 1, count($arr) - $n);
        return array_merge($first, $second);
    }
    echo "0-9 array with index 5 removed: ";
    print_r(rmElement($numArr, 5));
    echo '<br>';
    echo "0-9 array with index 7 removed: ";
    print_r(rmElement($numArr, 7));
    echo '<br>';
    echo '<br>';

    //challenge 4
    echo "Challenge 4:<br>";
    $addArr = array("Cow", "Chicken", "Pig", "Horse");
    function addElement($arr, $n, $el) {
        $first = array_slice($arr, 0, $n);
        $second = array_slice($arr, $n, count($arr) - $n);
        array_push($first, $el);
        return array_merge($first, $second);
    }
    print_r($addArr);
    echo '<br>';
    print_r(addElement($addArr, 2, "Sheep"));
    echo '<br>';
    echo '<br>';

    //slide 66 challenges
    //challenge 5
    echo "Challenge 5:<br>";
    $mixedCase = "CoNgRaTuLaTiOnS";
    function flipCase($str) {
        for($i = 0; $i < strlen($str); $i++) {
            if (ctype_upper($str[$i]) == true) {
                $str[$i] = strtolower($str[$i]);
            } else {
                $str[$i] = strtoupper($str[$i]);
            }
        }
        return $str;
    }
    echo "Original string: $mixedCase. Flipped string: ".flipCase($mixedCase)."<br>";
    echo "<br>";

    //challenge 6
    echo "Challenge 6:<br>";
    $arrToSort = array("Hi", "My", "Name", "Is", "Spencer");
    function sortArr($arr) {
        $sorted = array();
        while (count($arr) != 0) {
            array_unshift($sorted, maxArr($arr));
        }
        return $sorted;
    }
    function maxArr(&$arr) {
        $max = -INF;
        $maxIndex = 0;
        for($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] > $max) {
                $max = $arr[$i];
                $maxIndex = $i;
            }
        }
        //use remove element function from earlier
        $arr = rmElement($arr, $maxIndex);
        return $max;
    }
    echo "Original Array: ";
    print_r($arrToSort);
    echo "<br>";
    echo "Sorted Array: ";
    print_r(sortArr($arrToSort));
    echo "<br>";
    echo "<br>";

    //leetcode problems
    //challenge 7
    echo "<h1>Leetcode Section</h1><br>";
    echo "Challenge 7: Running Sum of 1d Array<br>";
    $runningSumArr = array(1,2,3,4);
    function runningSum($nums) {
        $currentSum = 0;
        for ($i = 0; $i < count($nums); $i++) {
            $nums[$i] = $nums[$i] + $currentSum;
            $currentSum = $nums[$i];
        };
        return $nums;
    };
    echo "Input Array: ";
    print_r($runningSumArr);
    echo "<br>";
    echo "Output: ";
    print_r(runningSum($runningSumArr));
    echo "<br>";
    echo "<br>";

    //challenge 8
    echo "Challenge 8: How many numbers are smaller than the current number<br>";
    $smallerArray = array(2, 6, 7, 3, 10, 5);
    function smallerNumbersThanCurrent($nums) {
        $smallerList = array();
        foreach ($nums as $num) {
            $amountSmaller = 0;
            foreach ($nums as $otherNum) {
                if ($otherNum < $num) {
                    $amountSmaller++;
                }
            }
            $smallerList[] = $amountSmaller;
        }
        return $smallerList;
    };
    echo "Input Array: ";
    print_r($smallerArray);
    echo "<br>Output Array: ";
    print_r(smallerNumbersThanCurrent($smallerArray));
    echo "<br>";
    echo "<br>";

    //challenge 9
    echo "Challenge 9: Jewels and Stones<br>";
    $jewels = "aA";
    $stones = "aAAbbbb";
    function numJewelsInStones($jewels, $stones) {
        $areJewels = 0;
        for ($i = 0; $i < strlen($stones); $i++) {
            if (str_contains($jewels, $stones[$i]) == true) {
                $areJewels++;
            }
        }
        return $areJewels;
    };
    echo "Jewels: $jewels. Stones: $stones<br>";
    echo "Output: ". numJewelsInStones($jewels, $stones);
    echo "<br>";
    echo "<br>";

    //challenge 10
    echo "Challenge 10: Maximum Nesting Depth of Parentheses<br>";
    function maxDepth($s) {
        $depth = 0;
        $maxDepth = 0;
        for($i = 0; $i < strlen($s); $i++) {
            if ($s[$i] == "(") {
                $depth += 1;
                if ($depth > $maxDepth) {
                    $maxDepth = $depth;
                }
            } else if ($s[$i] == ")") {
                $depth -= 1;
            }
        }
        return $maxDepth;
    };
    $depthStr = "(1+(2*3)+((8)/4))+1";
    echo "Input: $depthStr<br>";
    echo "Output: ". maxDepth($depthStr);
    echo "<br>";
    echo "<br>";

    //challenge 11
    echo "Challenge 11: Robot Return to Origin<br>";
    function judgeCircle($moves) {
        $xPos = 0;
        $yPos = 0;
        for ($i = 0; $i < strlen($moves); $i++) {
            if ($moves[$i] == "U") {
                $yPos++;
            } else if ($moves[$i] == "D") {
                $yPos--;
            } else if ($moves[$i] == "L") {
                $xPos--;
            } else {
                $xPos++;
            }
        }
        return $xPos == 0 && $yPos == 0;
    }
    $moveStr = "UDLR";
    echo "Input: $moveStr<br>";
    echo "Output: ". judgeCircle($moveStr);
    echo "<br>";
    echo "<br>";

    //challenge 12
    echo "Challenge 12: Richest Customer Wealth<br>";
    function maximumWealth($accounts) {
        $highest = 0;
        foreach ($accounts as $customer) {
            $sum = 0;
            foreach ($customer as $amount) {
                $sum += $amount;
            }
            if ($sum > $highest) {
                $highest = $sum;
            }
        }
        return $highest;
    };
    $accounts = array(array(1, 2, 3), array(1, 2, 2), array(2, 1, 4));
    echo "Input: ";
    print_r($accounts);
    echo "<br>";
    echo "Output: ". maximumWealth($accounts);
?>