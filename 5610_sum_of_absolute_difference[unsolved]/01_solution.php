<?php

// time limit exceeded

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function getSumAbsoluteDifferences($nums)
    {
        $sizeof = sizeof($nums);
        $return = [];

        for ($i = 0; $i<$sizeof; $i++) {
            $sum_of_diferences = 0;

            for ($j = 0; $j<$sizeof; $j++) {
                $n = $nums[$i];
                $m = $nums[$j];

                $sum_of_diferences += abs($n - $m);
            }

            $return[] = $sum_of_diferences;
        }

        return $return;
    }
}
