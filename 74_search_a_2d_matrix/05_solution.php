<?php
// status: Accepted
// problem link: https://leetcode.com/problems/search-a-2d-matrix/
// result link: https://leetcode.com/submissions/detail/312144789/
// runtime: faster than 100.00%
// memory: less than 100.00%

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
        for ($i = 0; $i<sizeof($matrix); $i++) {
            if ($matrix[$i][0] === $target) {
                return true;
            }

            if ($i > 0 && $target <= $matrix[$i][0] && $target > $matrix[$i - 1][0]) {
                $line_index = $i - 1;
                break;
            }

            if ($i === sizeof($matrix) - 1 && $target > $matrix[$i][0]) {
                $line_index = $i;
            }
        }

        $line = $matrix[$line_index];


        $start = 0;
        $end = sizeof($line) - 1;
        while ($start <= $end) {
            $mid = $start + floor(($end - $start) / 2);

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
