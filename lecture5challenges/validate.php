<?php
    class Validator {
        private $username = false;
        private $email = false;
        private $password = false;
        private $confirmPassword = false;

        function __construct() {
            $this->username = $_POST['username'];
            $this->email = $_POST['email'];
            $this->password = $_POST['password'];
            $this->confirmPassword = $_POST['confirm-password'];
        }

        function checkEmpty($loc) {
            if ($this->username == false || $this->email == false || $this->password == false || $this->confirmPassword == false) {
                header("Location: ".$loc);
            }
        }

        function checkUsername($loc) {
            if (strlen($this->username) < 6) {
                header("Location: ".$loc);
            }
        }

        function checkEmail($loc) {
            if (!str_contains($this->email, '@') || !str_contains($this->email, '.')) {
                header("Location: ".$loc);
            }
        }

        function checkPassword($loc) {
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
                header("Location: ".$loc);
            }
        }

        function checkMatching($loc) {
            if ($this->password !== $this->confirmPassword) {
                header("Location: ".$loc);
            }
        }
    }
    $validate = new Validator();
    $validate->checkEmpty('fivs.php?error=1');
    $validate->checkUsername('fivs.php?user-error=1');
    $validate->checkEmail('fivs.php?email-error=1');
    $validate->checkPassword('fivs.php?password-error=1');
    $validate->checkMatching('fivs.php?password-match-error');
?>