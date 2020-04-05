<?php
// dificulty: easy
// status: UNSUBMITTED
// link: NA
// runtime: NA

class Solution
{
    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices)
    {
        $size = sizeof($prices);
        $max_min_profit = $this->getMaxMinProfit($prices);

        $last_added = null;
        $profit = 0;
        $max = null;
        $min = null;

        for ($i = 0; $i<$size; $i++) {
            $item = $prices[$i];
            $next = $prices[$i + 1];
            $prev = $last_added;

            /*
            $is_unique = ($last_added !== null) && $last_added !== $item;
            if (! $is_unique) {
                continue;
            }
            */

            // retrieve min | price to buy
            if ($next < $item) {
                continue;
            } else {
                $min = $item;
                $min_index = $i;
            }

            // retrieve max | price to sell
            $max_index = $i;
            while (isset($prices[$max_index + 1]) && $prices[$max_index + 1] > $prices[$max_index]) {
                $max_index += 1;
            }

            $profit += $prices[$max_index] - $prices[$min_index];

            $i = $max_index;

            // store the unique thingy
            //$last_added = $item;
        }

        return $max_min_profit > $profit ? $max_min_profit : $profit;
    }

    protected function getMaxMinProfit($array) : int
    {
        $size = sizeof($array);
        $max = $array[0];
        $min = $array[0];

        for ($i = 1; $i<$size; $i++) {
            $item = $array[$i];

            $max = max($max, $item);
            $min = min($min, $item);
        }

        return $max - $min;
    }
}
