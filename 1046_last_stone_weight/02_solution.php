<?php
// dificulty:
// status: Output Limit Exceeded
// link: https://leetcode.com/submissions/detail/323739342
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

                if (sizeof($stones) === 1) {
                    return $stones[0];
                }
            }
        }

        return (sizeof($stones) % 2);
    }
}
