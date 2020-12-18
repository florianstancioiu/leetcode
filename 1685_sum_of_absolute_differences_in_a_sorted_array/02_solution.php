<?php

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function getSumAbsoluteDifferences($nums)
    {
        $bigger_sum = array_sum($nums);
        $smaller_sum = 0;
        $result = [];

        for ($i = 0; $i<sizeof($nums); $i++) {
            $num = $nums[$i];

            $bigger_sum -= $num;
            $smaller_diff = ($i * $num) - $smaller_sum;
            $bigger_diff = $bigger_sum - $num * (sizeof($nums) - 1 - $i);

            $smaller_sum += $num;

            $result[] = $smaller_diff + $bigger_diff;
        }

        return $result;
    }
}
