<?php
// dificulty:
// status: Time Limit Exceeded
// link: https://leetcode.com/submissions/detail/323734806
// runtime: faster than x%

class Solution
{
    /**
     * @param Integer[] $stones
     * @return Integer
     */
    function lastStoneWeight($stones)
    {
        sort($stones);

        while (($max = max($stones)) !== 1) {
            $last = array_pop($stones);
            $last_but_one = array_pop($stones);

            if ($last > $last_but_one) {
                $stones[] = $last - $last_but_one;
                sort($stones);
            }
        }

        return (sizeof($stones) % 2);
    }
}
