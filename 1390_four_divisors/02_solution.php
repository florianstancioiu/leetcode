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
    function sumFourDivisors($nums)
    {
        $sum = 0;
        $calc_sum = [];
        for ($i = 0; $i<sizeof($nums); $i++) {
            if ($this->hasFourDivisors($nums[$i])) {
                $calc_sum[] = $i;
            }
        }

        for ($i = 0; $i<sizeof($calc_sum); $i++) {
            $number = $calc_sum[$i];
            for ($j = 1; $j <= $number; $j++)
        }

        return $sum;
    }

    public function hasFourDivisors(int $number)
    {
        $i = 1;
        $divisors = 0;
        while ($i * $i < $number) {
            if ($number % $i === 0) {
                $
            }

            if ($divisors > 4) {
                return 0;
            }

            $i++;
        }

        $divisors += 1;

        print_r($sum);
        print_r("\n");
        print_r($divisors);
        print_r("\n");
        print_r("\n");

        return $divisors === 4;
    }
}
