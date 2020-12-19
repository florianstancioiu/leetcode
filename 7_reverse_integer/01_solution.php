<?php

class Solution
{
    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        $i = 0;
        $original_x = $x;
        $reversed = 0;

        while($x%10 !== 0) {
            $reversed = $reversed * 10 + $x%10;
            $x = $x/10;
            $i++;
        }

        return $original_x < 0 ? -1 * abs($reversed) : $reversed;
    }
}
