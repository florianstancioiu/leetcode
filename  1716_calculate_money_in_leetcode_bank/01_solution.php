<?php

class Solution
{
    /**
     * @param Integer $n
     * @return Integer
     */
    function totalMoney($n)
    {
        $weeks = floor($n/7);
        $days = $n%7;
        
        print_r($weeks);
        print_r($days);
        print_r("\n");

        return $weeks * $this->sumDays(7) + $this->sumDays($days);
    }

    function sumDays($number_of_days)
    {
        $sum = 0;
        for ($i = 1; $i<=$number_of_days; $i++) {
            $sum += $i;
        }

        return $sum;
    }
}
