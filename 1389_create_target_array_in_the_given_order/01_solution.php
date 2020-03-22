<?php
// dificulty: easy
// status:
// link:
// runtime: faster than x%

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer[] $index
     * @return Integer[]
     */
    function createTargetArray($nums, $index) : array
    {
        $target_array = [];

        for ($i = 0; $i<sizeof($index); $i++) {
            $current_index = $index[$i];
            if (! isset($target_array[$current_index])) {
                $target_array[$current_index] = $nums[$i];
            } else {
                array_splice($target_array, $current_index, 0, $nums[$i]);
            }
        }

        return $target_array;
    }
}
