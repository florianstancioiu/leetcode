<?php
// status: Wrong Answer
// problem link: https://leetcode.com/problems/search-a-2d-matrix/
// result link: https://leetcode.com/submissions/detail/312133208/
// runtime: NA
// memory: NA

class Solution {

    /**
     * @param Integer[][] $matrix
     * @param Integer $target
     * @return Boolean
     */
    function searchMatrix($matrix, $target) {
        if (sizeof($matrix) === 0) {
            return false;
        }

        $line_index = 0;
        for ($i = 1; $i<sizeof($matrix); $i++) {
            if ($target <= $matrix[$i][0] && $target > $matrix[$i - 1][0]) {
                $line_index = $i - 1;
                break;
            }

            if ($i === sizeof($matrix) && $target > $matrix[$i][0]) {
                $line_index = $i;
            }
        }

        $line = $matrix[$line_index];

        $start = 0;
        $end = sizeof($line);
        while ($start <= $end) {
            $mid = floor($start + ($end - $start) / 2);

            if ($line[$mid] === $target) {
                return true;
            } elseif ($target > $line[$mid]) {
                $start = $mid + 1;
            } elseif ($target < $line[$mid]) {
                $end = $mid - 1;
            }
        }

        return false;
    }
}
