<?php
// dificulty: easy
// status: accepted
// link: https://leetcode.com/submissions/detail/315904184/
// runtime: faster than 55.56%

/**
* I don't need to check if the candidate is actually a leader because
* the problem states that there always is a leader in the array
*/
class Solution
{
    function majorityElement($nums)
    {
        $stack = [];
        $total_nums = sizeof($nums);

        for ($i = 0; $i<$total_nums; $i++) {
            if (sizeof($stack) === 0) {
                $stack[] = $nums[$i];
            } else {
                if (end($stack) !== $nums[$i]) {
                    unset($stack[key($stack)]);
                } else {
                    $stack[] = $nums[$i];
                }
            }
        }

        return end($stack);
    }
}
