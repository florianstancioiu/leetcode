<?php
// dificulty: easy
// status: accepted
// link: https://leetcode.com/submissions/detail/315579403/
// runtime: faster than 100%

class Solution
{
    /**
     * @param String $s
     * @param String $t
     * @return String
     */
    function findTheDifference($s, $t)
    {
        $array = [];

        for ($i=0; $i<strlen($s); $i++) {
            $char = $s[$i];

            if (! isset($array[$char])) {
                $array[$char] = 1;
            } else {
                $array[$char] += 1;
            }
        }

        for ($i=0; $i<strlen($t); $i++) {
            $char = $t[$i];
            if (! isset($array[$char])) {
                return $char;
            } else {
                $array[$char] -=1;

                if ($array[$char] <= 0) {
                    unset($array[$char]);
                }
            }
        }

        return (array_values($array))[0];
    }
}
