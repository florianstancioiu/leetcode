<?php
// dificulty:
// status:
// link:
// runtime: faster than x%

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function rob($nums)
    {
        $even_sum = 0;
        $odd_sum = 0;

        for ($i=0; $i<sizeof($nums); $i++) {
            if ($i % 2 === 0) {
                $even_sum += $nums[$i];
            } else {
                $odd_sum += $nums[$i];
            }
        }

        return max($even_sum, $odd_sum);
    }
}
