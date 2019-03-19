<?php
function lengthOfLongestSubstring($s)
{
    $max_length = 0;
    $count = strlen($s);
    if ($count == 1) {
        return 1;
    }

    for ($i = 0; $i < $count; $i++) {
        $unique = array();
        $tmp = $s[$i];
        $unique[] = $tmp;
        for ($j = $i + 1; $j < $count; $j++) {
            if (in_array($s[$j], $unique)) {
                $lengh = strlen($tmp);
                $max_length = max($lengh, $max_length);
                break;
            } else {
                $unique[] = $s[$j];
                $tmp .= $s[$j];
                $length = strlen($tmp);
                $max_length = max($length, $max_length);
            }
        }
    }
    return $max_length;
}

$s = " ";
echo lengthOfLongestSubstring($s);