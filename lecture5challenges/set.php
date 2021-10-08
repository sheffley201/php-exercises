<?php
    require 'set.view.php';

    $setOne = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
    $setTwo = [1, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37];
    $setThree = [2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 24];

    class Sets {
        private $firstSet = false;
        private $secondSet = false;

        function __construct($one, $two) {
            if ($one == 'set-1') {
                $this->firstSet = $setOne;
            } else if ($one == 'set-2') {
                $this->firstSet = $setTwo;
            } else if ($one == 'set-3') {
                $this->firstSet = $setThree;
            }
            if ($two == 'set-1') {
                $this->secondSet = $setOne;
            } else if ($two == 'set-2') {
                $this->secondSet = $setTwo;
            } else if ($two == 'set-3') {
                $this->secondSet = $setThree;
            }
        }
    }

    $set = new Set($_POST['set-one'], $_POST['set-two']);
?>