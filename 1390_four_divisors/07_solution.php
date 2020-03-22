<?php
// dificulty: medium
// status: accepted
// link:
// runtime: faster than 100%

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function sumFourDivisors($nums)
    {
        error_reporting(0);
        ini_set('display_errors', 0);

        $sum = 0;
        for ($i = 0; $i<sizeof($nums); $i++) {
            $sum += $this->fourDivisors($nums[$i]);
        }

        return $sum;
    }

    public function fourDivisors(int $number)
    {
        $limit = floor(sqrt($number)) + 1;
        $divisors = [];

        for ($i=1; $i<=$limit; $i++) {
            if ($number % $i === 0) {
                $sum += $i + ($number / $i);
                $divisors[$i] = $i;
                $divisors[$number / $i] = $number / $i;
            }
        }

        return sizeof($divisors) === 4 ? array_sum($divisors) : 0;
    }
}
