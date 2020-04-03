<?php
// dificulty: easy
// status: accepted
// link: https://leetcode.com/submissions/detail/319041807/
// runtime: faster than 46.38%

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums)
    {
        $size = sizeof($nums);
        $max_current = $max = $nums[0];

        for ($i = 1; $i<$size; $i++) {
            $max_current = max($nums[$i], $max_current + $nums[$i]);
            $max = max($max, $max_current);
        }

        return $max;
    }
}
