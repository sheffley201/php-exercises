<?php
    class Validator {
        private $username = false;
        private $email = false;
        private $password = false;
        private $confirmPassword = false;
        private $errors = [];

        function __construct() {
            $this->username = $_POST['username'];
            $this->email = $_POST['email'];
            $this->password = $_POST['password'];
            $this->confirmPassword = $_POST['confirm-password'];
        }

        function checkEmpty() {
            if ($this->username == false || $this->email == false || $this->password == false || $this->confirmPassword == false) {
                array_push($this->errors, 'error=1');
            }
        }

        function checkUsername() {
            if (strlen($this->username) < 6) {
                array_push($this->errors, 'user-error='.$this->username);
            }
        }

        function checkEmail() {
            if (!str_contains($this->email, '@') || !str_contains($this->email, '.')) {
                array_push($this->errors, 'email-error='.$this->email);
            }
        }

        function checkPassword() {
            $upper = false;
            $lower = false;
            $number = false;
            for ($i = 0; $i < strlen($this->password); $i++) {
                if (ctype_upper($this->password[$i])) {
                    $upper = true;
                } else if (ctype_lower($this->password[$i])) {
                    $lower = true;
                } else if (ctype_digit($this->password[$i])) {
                    $number = true;
                }
            }
            if (!$upper || !$lower || !$number) {
                array_push($this->errors, 'password-error='.$this->password);
            }
        }

        function checkMatching() {
            if ($this->password !== $this->confirmPassword) {
                array_push($this->errors, 'password-match-error='.$this->password.'&other-password='.$this->confirmPassword);
            }
        }

        function returnError($loc) {
            if (count($this->errors) > 0) {
                header("Location: ".$loc.implode('&', $this->errors));
            }
        }
    }
    $validate = new Validator();
    $validate->checkEmpty();
    $validate->checkUsername();
    $validate->checkEmail();
    $validate->checkPassword();
    $validate->checkMatching();
    $validate->returnError('fivs.php?');
?>