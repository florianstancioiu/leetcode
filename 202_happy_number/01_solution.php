<?php
// dificulty: easy
// status: accepted
// link: https://leetcode.com/submissions/detail/318739657/
// runtime: faster than 97.22%

class Solution
{
    /**
     * @param Integer $n
     * @return Boolean
     */
    function isHappy($n)
    {
        $vars = [];
        $vars[$n] = 1;
        while ($n !== 1) {
            $digits = str_split((string)$n);
            $size = sizeof($digits);

            $sum = 0;
            for ($i = 0; $i<$size; $i++) {
                $digit = (int) $digits[$i];
                $sum += pow($digit, 2);
            }

            $n = $sum;
            if (isset($vars[$n])) {
                return false;
            }

            $vars[$n] = 1;
        }

        return true;
    }
}
