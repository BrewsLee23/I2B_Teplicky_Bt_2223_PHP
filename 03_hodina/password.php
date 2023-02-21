<?php
    function isValid($password){
        if (strlen($password) < 8) {
            return false;
        }

        $numbers = 0;
        for ($i = 0; $i < strlen($password); $i++) {
            if (!is_numeric($password[$i])) {
                $numbers++;
            }
        }
        if ($numbers < 1) {
            return false;
        }

        $upper = 0;
        for ($i = 0; $i < strlen($password); $i++) {
            if (ctype_upper($password[$i])) {
                $upper++;
            }
        }
        if ($upper < 3) {
            return false;
        }

        $lower = 0;
        for ($i = 0; $i < strlen($password); $i++) {
            if (ctype_lower($password[$i])) {
                $lower++;
            }
        }
        if ($lower < 3) {
            return false;
        }

        return true;
    }
?>