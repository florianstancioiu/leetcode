<?php
// dificulty:
// status:
// link:
// runtime: faster than x%

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function rob($nums)
    {
        $size = sizeof($nume);
        $sum = 0;

        if (sizeof($nums) === 1) {
            return $nums[0];
        }

        if (sizeof($nums) === 0) {
            return 0;
        }

        if ($nums[0] > $nums[1]) {
            $start = 0;
            $sum += $nums[0];
        } else {
            $start = 1;
            $sum += $nums[1];
        }

        while ($i < $size - 2) {
            if ($nums[$i + 2] > $nums[$i + 3]) {
                $sum += $nums[$i + 2];
                $i += 2;
            } else {
                $sum += $nums[$i + 3];
                $i += 3;
            }
        }

        return $sum;
    }
}
