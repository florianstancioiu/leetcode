<?php
// dificulty:
// status: Time Limit Exceeded
// link:
// runtime: faster than x%

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function sumFourDivisors($nums)
    {
        $sum = 0;
        for ($i = 0; $i<sizeof($nums); $i++) {
            $index = $indexes[$i];
            $number = $nums[$index];

            $divisors = 0;
            for ($j = 1; $j <= sqrt($number); $j++) {
                if ($number % $j === 0) {
                    $sum += $j;
                    $divisors += 1;
                }

                if ($divisors > 4) {
                    $continue;
                }
            }

            $divisors += 1;
            $sum += $number;

            if ($divisors === 4) {
                $sum += $number;
            }
        }

        return $sum;
    }
}
