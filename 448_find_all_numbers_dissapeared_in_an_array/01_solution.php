<?php
// dificulty: easy
// status: wrong answer
// link: https://leetcode.com/submissions/detail/315286612/
// runtime: faster than x%

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function findDisappearedNumbers($nums)
    {
        $size = sizeof($nums);
        $not_found = range(1, $size);

        for ($i = 0; $i<$size; $i++) {
            $number = $nums[$i] - 1;
            if (isset($not_found[$number])) {
                unset($not_found[$number]);
            }
        }

        return $not_found;
    }
}
