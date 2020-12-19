<?php

// accepted

class Solution
{
    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        $is_negative = $x < 0;
        $reversed = 0;

        if ($is_negative) {
            $x = $x * -1;
        }

        while($x > 0) {
            $reversed = $reversed * 10 + $x%10;
            $x = floor($x/10);
        }

        if ($reversed > (pow(2, 31) - 1)) {
            return 0;
        }

        return $is_negative ? -1 * $reversed : $reversed;
    }
}
