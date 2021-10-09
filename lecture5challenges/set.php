<?php

    require 'set.view.php';

    class Sets {
        protected $firstSet = false;
        protected $secondSet = false;

        function __construct($one, $two) {
            if ($one == 'set-1') {
                $this->firstSet =[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
            } else if ($one == 'set-2') {
                $this->firstSet = [1, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37];
            } else if ($one == 'set-3') {
                $this->firstSet = [2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 24];
            }
            if ($two == 'set-1') {
                $this->secondSet = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
            } else if ($two == 'set-2') {
                $this->secondSet = [1, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37];
            } else if ($two == 'set-3') {
                $this->secondSet = [2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 24];
            }
        }

        function print() {
            print_r($this->firstSet);
        }

        function exists($n) {
            echo in_array($n, $this->firstSet) ? 'True' : 'False';
        }

        function add($n) {
            if (in_array($n, $this->firstSet)) {
                echo 'Already in the set';
            } else {
                array_push($this->firstSet, $n);
                print_r($this->firstSet);
            }
        }

        function remove($n) {
            if (!in_array($n, $this->firstSet)) {
                echo 'False';
            } else {
                $firstHalf = array_slice($this->firstSet, 0, array_search($n, $this->firstSet));
                $secondHalf = array_slice($this->firstSet, array_search($n, $this->firstSet) + 1, count($this->firstSet));
                $this->firstSet = array_merge($firstHalf, $secondHalf);
                print_r($this->firstSet);
                echo "True";
            }
        }

        function union() {
            if ($this->secondSet !== false) {
                $combine = [];
                for ($i = 0; $i < 12; $i++) {
                    $first = $this->firstSet[$i];
                    $second = $this->secondSet[$i];
                    if (!in_array($first, $combine)) {
                        array_push($combine, $first);
                    }
                    if (!in_array($second, $combine)) {
                        array_push($combine, $second);
                    }
                }
                print_r($combine);
            } else {
                echo "Please choose an option for both sets";
            }
        }

        function intersection() {
            if ($this->secondSet !== false) {
                $combine = [];
                for ($i = 0; $i < 12; $i++) {
                    if (in_array($this->firstSet[$i], $this->secondSet)) {
                        array_push($combine, $this->firstSet[$i]);
                    }
                }
                print_r($combine);
            } else {
                echo "Please choose an option for both sets";
            }
        }

        function difference() {
            if ($this->secondSet !== false) {
                $combine = [];
                for ($i = 0; $i < 12; $i++) {
                    if (!in_array($this->firstSet[$i], $this->secondSet)) {
                        array_push($combine, $this->firstSet[$i]);
                    }
                }
                print_r($combine);
            } else {
                echo "Please choose an option for both sets";
            }
            
        }
    }
    
    $set = new Sets($_POST['set-one'], $_POST['set-two']);
    switch($_POST['operation']) {
        case 'print':
            $set->print();
            break; 
        case 'exists':
            $set->exists($_POST['number']);
            break;
        case 'add':
            $set->add($_POST['number']);
            break;
        case 'remove':
            $set->remove($_POST['number']);
            break;
        case 'union':
            $set->union();
            break;
        case 'intersection':
            $set->intersection();
            break;
        case 'difference':
            $set->difference();
            break;
    }
?>