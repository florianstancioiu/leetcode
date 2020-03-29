<?php
// dificulty: easy
// status: accepted
// link: https://leetcode.com/submissions/detail/317034496/
// runtime: not enough data

class Solution
{
    /**
     * @param Integer[] $arr
     * @return Integer
     */
    function findLucky($arr)
    {
        $evaluation = [];
        $lucky = [];
        $size = sizeof($arr);

        for ($i = 0; $i<$size; $i++) {
            $item = $arr[$i];
            if (! isset($evaluation[$item])) {
                $evaluation[$item] = 1;
            } else {
                $evaluation[$item]++;
            }

            if ($evaluation[$item] === $item) {
                $lucky[$item] = $item;
            } elseif ($evaluation[$item] > $item) {
                unset($lucky[$item]);
            }
        }

        return sizeof($lucky) > 0 ? max($lucky) : -1;
    }
}
