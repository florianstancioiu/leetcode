<?php
// dificulty: easy
// status: accepted
// link: There's no link
// runtime: NA

class Solution
{
    /**
     * @param Integer[] $arr
     * @return Integer
     */
    function countElements($arr)
    {
        $size = sizeof($arr);
        $hash = [];
        for ($i = 0; $i<$size; $i++) {
            $hash[$arr[$i]] = 1;
        }

        $count = 0;
        for ($i = 0; $i<$size; $i++) {
            if (isset($hash[$arr[$i] + 1])) {
                $count += 1;
            }
        }

        return $count;
    }
}
