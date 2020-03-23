<?php
// dificulty: easy
// status: accepted
// link: https://leetcode.com/submissions/detail/315279564/
// runtime: faster than 76.79%

class Solution
{
    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n)
    {
        if ($n === 0) {
            return 1;
        }

        $array = [
            1 => 1,
            2 => 2
        ];

        for ($i = 3; $i<=$n;$i++) {
            $array[$i] = $array[$i - 1] + $array[$i - 2];
        }

        return $array[$n];
    }
}
