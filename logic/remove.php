<?php
/*
* A function which will remove vowels or other matching  elements from an array.
* Function takes 2 arrays.
*
*/
// could have used in_array instead of second loop
function removeVowels($remove, $keep) {
    foreach ($keep as $key => $value) {
        foreach ($remove as $k => $v) {
            // if array item = $vowels remove from array
            if ($v == $value) {
                unset($keep[$key]);
            }
        }
    }
    echo 'The new string without vowels: '.implode('-', $keep);
}

$removeElements = ['a', 'e', 'i', 'o', 'u'];
$keepElements = ['a', 'p', 'p', 'l', 'e', 'p', 'i', 'e', 'a', 'n', 'd', 'i', 'c', 'e', 'c', 'r', 'e', 'a', 'm'];
?>
<!--Note this is not good to mix logic and display. This is simply for this script-->
<p>Original element values.</p>
<?php echo implode('-', $keepElements); ?>
<p>Remove these element values.</p>
<?php echo implode('-', $removeElements); ?>
<hr>
<?php removeVowels($removeElements, $keepElements);
