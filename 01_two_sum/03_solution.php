<?php
// Success
// Better than 95%
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $array = [];

        for ($i = 0; $i<sizeof($nums); $i++) {
            $num = $nums[$i];
            $needed = $target - $num;

            if (!isset($array[$num])) {
                $array[$num] = $i;
            }

            if (isset($array[$needed]) && $array[$needed] !== $i) {
                return [$array[$needed], $i];

                break;
            }
        }
    }
}
