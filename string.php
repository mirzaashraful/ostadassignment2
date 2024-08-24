<?php
$strings = ["Hello", "World", "PHP", "Programming"];
function vowelsCount($str) {
    $vowels = 'aeiouAEIOU';
    $strRev = '';
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        // Check if the character is a vowel
        if (strpos($vowels, $str[$i]) !== false) {
            $count++;
        }
    }
    return $count;
}
foreach ($strings as $string) {
    $vowelCount = vowelsCount($string);
    $strRev = strrev($string);
    echo "Original String: \"$string\", Vowel Count: $vowelCount , Reversed String: $strRev .\n";
}
?>