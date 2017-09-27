<?php
/*
* A function which will remove vowels or other matching  elements from an array.
* Function takes 2 arrays.
* https://duckduckgo.com/?q=php+unset&t=opera&ia=qa
* http://php.net/implode
*/

function removeVowels($remove, $keep) {
    foreach ($keep as $key => $value) {
        foreach ($remove as $k => $v) {
            // if array item = $vowels remove from array
            if ($v == $value) {
                unset($keep[$key]);
            }
        }
    }
    echo 'The new string without vowels: '. implode(' ', $keep);
}

removeVowels(['a', 'e', 'i', 'o', 'u'], ['a', 'p', 'p', 'l', 'e', 'p', 'i', 'e', 'a', 'n', 'd', 'i', 'c', 'e', 'c', 'r', 'e', 'a', 'm']);
