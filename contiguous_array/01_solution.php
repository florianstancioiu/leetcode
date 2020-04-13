<?php
// dificulty:
// status: Clar ca two pointers
// link:
// runtime: faster than x%

// This or two pointers technique
// probably two pointers
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findMaxLength($nums)
    {
        $size = sizeof($nums);
        $total_ones = 0;
        $total_zeroes = 0;
        $length = [];

        for ($i = 0; $i<$size; $i++) {
            if ($nums[$i] === 0) {
                $total_zeroes += 1;
            } else {
                $total_ones += 1;
            }

            $length[$i] = $total_ones === $total_zeroes;
        }

        for ($i = $size - 1; $i !== 0; $i--) {
            if ($length[$i] === 1) {
                return $i;
            }
        }
    }
}
