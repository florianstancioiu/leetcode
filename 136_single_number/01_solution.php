<?php
// dificulty: easy
// status: accepted
// link: https://leetcode.com/submissions/detail/316179674/
// runtime: faster than 98.36%

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums)
    {
        $vals = [];
        $size = sizeof($nums);

        for ($i=0; $i<$size; $i++) {
            $number = $nums[$i];
            if (! isset($vals[$number])) {
                $vals[$number] = 1;
            } else {
                unset($vals[$number]);
            }
        }

        end($vals);

        return key($vals);
    }
}
