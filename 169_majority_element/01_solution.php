<?php
// dificulty: easy
// status: accepted
// link: https://leetcode.com/submissions/detail/315902507/
// runtime: faster than 27.78%

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
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

        if (sizeof($stack) > 0) {
            $candidate = end($stack);
        }

        $count = 0;
        for ($i = 0; $i<$total_nums; $i++) {
            if ($nums[$i] === $candidate) {
                $count++;
            }
        }

        return $count > $n / 2 ? $candidate : null;
    }
}
