<?php
// dificulty: easy
// status: wrong answer
// link: https://leetcode.com/submissions/detail/319039737/
// runtime: faster than x%

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums)
    {
        $size = sizeof($nums);
        $max_current = 0;
        $max = 0;

        for ($i = 0; $i<$size; $i++) {
            $max_current = max(0, $max_current + $nums[$i]);
            $max = max($max, $max_current);
        }

        return $max;
    }
}
