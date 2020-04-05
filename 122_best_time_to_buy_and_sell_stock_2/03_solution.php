<?php
// dificulty: easy
// status: accepted
// link: https://leetcode.com/submissions/detail/320276063/
// runtime: NA (it's slow as fuck boii)

class Solution
{
    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices)
    {
        $size = sizeof($prices);
        $profit = 0;
        $max = null;
        $min = null;
        for ($i = 0; $i<$size; $i++) {
            $item = $prices[$i];
            $next = $prices[$i + 1];
            $prev = $last_added;

            // retrieve min | price to buy
            if ($next < $item) {
                continue;
            } else {
                $min = $item;
                $min_index = $i;
            }

            // retrieve max | price to sell
            $max_index = $i;
            while (
                isset($prices[$max_index + 1]) &&
                $prices[$max_index + 1] > $prices[$max_index]
            ) {
                $max_index += 1;
            }

            $profit += $prices[$max_index] - $prices[$min_index];

            $i = $max_index;
        }

        return $profit;
    }
}
