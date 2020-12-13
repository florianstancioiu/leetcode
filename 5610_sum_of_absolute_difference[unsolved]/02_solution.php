<?php

// try something but 

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function getSumAbsoluteDifferences($nums)
    {
        $sizeof = sizeof($nums);
        $array_sum = array_sum($nums);
        $return = [];

        for ($i = 0; $i<$sizeof; $i++) {
            $sum_of_diferences = 0;

            for ($j=0; $j<$sizeof; $j++) {
                $sum_of_diferences += abs($nums[$i] - $nums[$j]);
            }

            $return[$i] = $sum_of_diferences;
        }

        return $return;
    }
}
