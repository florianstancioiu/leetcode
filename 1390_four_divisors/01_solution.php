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
        for ($i = 0; $i<sizeof($nums); $i++) {
            $sum += $this->sumOfFourDivisors($nums[$i]);
        }

        return $sum;
    }

    public function sumOfFourDivisors(int $number)
    {
        $i = 1;
        $divisors = 0;
        $sum = 0;
        while ($i * $i < $number) {
            if ($number % $i === 0) {
                $sum += $i;
                $divisors +=2;
            }
            $i++;
        }

        if ($i * $i === $number) {
            $divisors +=1;
            $sum += $i;
        }

        return $divisors === 4 ? $sum : 0;
    }
}
