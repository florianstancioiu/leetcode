<?php
// dificulty: easy
// status: accepted
// link: https://leetcode.com/submissions/detail/381235244/
// runtime: 12 ms
// note: The problem could've been solved in an easier fashion using a stack

class Solution
{
    /**
     * @param String $s
     * @return String
     */
    function makeGood($s)
    {
        $i = 0;
        while (strlen($s) !== 0 && $i < strlen($s)) {
            $we_found_something = false;
            $is_lower = $s[$i] === strtolower($s[$i]);
            $next_char = $is_lower ? strtoupper($s[$i]): strtolower($s[$i]);

            if ($s[$i + 1] === $next_char) {
                $s = substr_replace($s, "", $i, 2);
                $we_found_something = true;
            }

            if ($we_found_something) {
                if ($i > 0) {
                    $i--;
                } elseif ($i === 0) {
                    $i = 0;
                }
            } else {
                $i++;
            }
        }

        return $s;
    }
}
