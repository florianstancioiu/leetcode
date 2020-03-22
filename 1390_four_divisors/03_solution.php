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
        $indexes = [];
        for ($i = 0; $i<sizeof($nums); $i++) {
            if ($this->hasFourDivisors($nums[$i])) {
                $indexes[] = $i;
            }
        }

        $sum = 0;
        for ($i = 0; $i<sizeof($indexes); $i++) {
            $index = $indexes[$i];
            $number = $nums[$index];

            for ($j = 1; $j <= sqrt($number); $j++) {
                if ($number % $j === 0) {
                    $sum += $j;
                }
            }
            $sum += $number;
        }

        return $sum;
    }

    public function hasFourDivisors(int $number)
    {
        $i = 1;
        $divisors = 0;
        while ($i * $i < $number) {
            if ($number % $i === 0) {
                $divisors += 2;
            }

            if ($divisors > 4) {
                return 0;
            }

            $i++;
        }

        if ($i * $i === $number) {
            $divisors += 1;
        }

        return $divisors === 4;
    }
}
