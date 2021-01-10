<?php

// accepted
// I stole the solution from one of the competitors, jesus how easy he made it

class Solution
{
    /**
     * @param Integer $n
     * @return Integer
     */
    function totalMoney($n)
    {
        $result = 0;
        for ($i = 0; $i<$n; $i++) {
            $result += floor($i/7) + $i%7 + 1;
        }

        return $result;
    }
}
