<?php
// dificulty: easy
// status: accepted
// link: https://leetcode.com/submissions/detail/316180443/
// runtime: faster than 76.27%

class Solution
{
    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums)
    {
        $size = sizeof($nums);
        $total_zeroes = 0;

        for ($i=0; $i<$size; $i++) {
            if ($i >= $size + $total_zeroes - 1) {
                break;
            }

            if ($nums[$i] === 0) {
                $total_zeroes++;
                unset($nums[$i]);
                $nums[] = 0;
            }
        }

        return $nums;
    }
}
