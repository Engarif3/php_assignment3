<?php
function generatePassword($length) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+";

    $password = "";

    $charCount = strlen($chars);

    for ($i = 0; $i < $length; $i++) {
        $randomChar = $chars[rand(0, $charCount-1)];
        $password .= $randomChar;
    }

    return $password;
}

$password = generatePassword(12);
echo "The password is: $password";
?>
