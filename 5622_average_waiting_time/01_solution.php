<?php

// accepted

class Solution
{
    /**
     * @param Integer[][] $customers
     * @return Float
     */
    function averageWaitingTime($customers)
    {
        $waiting_times = [];
        $finish_time = 0;

        for ($i = 0; $i<sizeof($customers); $i++) {
            $enter_time = $customers[$i][0];
            $prepare_time = $customers[$i][1];
            $starting_time = $finish_time;

            if ($i === 0) {
                $starting_time = $enter_time;
            }

            if ($enter_time >= $finish_time) {
                $starting_time = $enter_time;
            }

            $finish_time = $starting_time + $prepare_time;
            $waiting_time = $finish_time - $enter_time;
            $waiting_times[] = $waiting_time;
        }

        return array_sum($waiting_times) / sizeof($waiting_times);
    }
}
