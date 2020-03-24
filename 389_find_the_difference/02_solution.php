<?php
// dificulty: easy
// status: wrong answer
// link: https://leetcode.com/submissions/detail/315578290/
// runtime: faster than x%

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

            $array[$char] = $char;
        }

        for ($i=0; $i<strlen($t); $i++) {
            $char = $t[$i];
            if (! isset($array[$char])) {
                return $char;
            } else {
                unset($array[$char]);
            }
        }
    }
}
