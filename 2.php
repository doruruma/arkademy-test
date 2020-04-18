<?php


# ===================
# Author : Andra Yuda
# ===================


$str = '@andra';
$pass = '12345s6';

function validation($success, $error = null)
{
    echo json_encode(['success' => $success, 'error' => $error]);
}

if (preg_match("/^@/", $str)) {                                 // Check for Username Symbol @ Prefix
    if (strlen($str) >= 2 && strlen($str) <= 12) {              // Check for Username Length
        if (is_numeric($pass)) {                                // Check for Password Format
            if (strlen($pass) == 6) {                           // Password length has to be 6
                validation('Validation Success');
            } else {
                $error['password'] = 'Password Length must be 6 Characters';
            }
        } else {
            $error['password'] = 'Password Must be a Number';
        }
    } else {
        $error['username'] = 'Username minimal Length is 2 and max 12 Characters';
    }
} else {
    $error['username'] = 'Username Prefix has to be @';
}

isset($error) ? validation(null, $error) : false;
