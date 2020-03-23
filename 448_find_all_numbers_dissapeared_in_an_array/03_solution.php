<?php
// dificulty: easy
// status: accepted
// link: https://leetcode.com/submissions/detail/315290438/
// runtime: faster than 69.23%

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function findDisappearedNumbers($nums)
    {
        $size = sizeof($nums);

        if ($size === 0) {
            return [];
        }

        $not_found = range(1, $size);

        for ($i = 0; $i<$size; $i++) {
            $number = $nums[$i] - 1;
            if (isset($not_found[$number])) {
                unset($not_found[$number]);
            }

            if ($number === -1) {
                unset($not_found[$size - 1]);
            }
        }


        return $not_found;
    }
}
