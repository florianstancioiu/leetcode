<?php
// dificulty: easy
// status: accepted
// link: https://leetcode.com/submissions/detail/322251789/
// runtime: faster than 100.00%
// note: I still think there's a better version

class Solution
{
    /**
     * @param String $S
     * @param String $T
     * @return Boolean
     */
    function backspaceCompare($s, $t)
    {
        $t_length = strlen($t);
        $s_length = strlen($s);
        $length = max($t_length, $s_length);
        $s_array = [];
        $t_array = [];

        // the memory is unoptimezed boiiiiii
        for ($i = 0; $i<$length; $i++) {
            if ($i < $s_length) {
                if ($s[$i] === "#") {
                    array_pop($s_array);
                } else {
                    $s_array[] = $s[$i];
                }
            }

            if ($i < $t_length) {
                if ($t[$i] === "#") {
                    array_pop($t_array);
                } else {
                    $t_array[] = $t[$i];
                }
            }
        }

        $s = implode($s_array);
        $t = implode($t_array);

        return $s === $t;
    }
}
