<?php
// dificulty: medium
// status:
// link:
// runtime: faster than x%

class Solution
{
    /**
     * @param Integer[] $rating
     * @return Integer
     */
    function numTeams($rating)
    {
        $totals = 0;
        $size = sizeof($rating);
        for ($i = 0; $i<$size - 2; $i++) {
            $a = $rating[$i];
            $b = $rating[$i + 1];
            $c = $rating[$i + 2];
            if (
                ($a < $b && $b < $c) ||
                ($c > $b && $b > $a)
            ) {
                $totals++;
            }
        }

        return $totals;
    }
}
