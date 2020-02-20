<?php
// Wrong Answer
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $array = [];
        $positions = [];

        for ($i = 0; $i<sizeof($nums); $i++) {
            $n = $target - $nums[$i];

            if ($nums[$i] < $target) {
                $array[$nums[$i]] = $i;
            }

            if (isset($array[$n])) {
                $positions = [$array[$n], $i];
                break;
            }
        }

        return $positions;
    }
}
