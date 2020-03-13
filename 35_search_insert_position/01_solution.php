<?php
// status: Accepted
// problem link: https://leetcode.com/problems/search-insert-position/
// result link: https://leetcode.com/submissions/detail/312124448/
// runtime: faster than 75.27%
// memory: less than 100.00%

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        $start = 0;
        $end = sizeof($nums) - 1;

        while ($start <= $end) {
            $mid = floor($start + ($end - $start) / 2);

            if ($nums[$mid] === $target) {
                return $mid;
            } elseif ($nums[$mid] > $target) {
                $end = $mid - 1;
            } else {
                $start = $mid + 1;
            }
        }

        $start_val = $nums[$start];
        $end_val = $nums[$end];

        if ($target < $start_val) {
            return $start;
        }

        if ($target > $end_val) {
            return $end + 1;
        }

        if ($target < $end_val) {
            return $end;
        }

    }
}
