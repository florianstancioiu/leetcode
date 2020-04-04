<?php
// dificulty: easy
// status: accepted
// link: https://leetcode.com/contest/biweekly-contest-23/submissions/detail/319610376/
// runtime: NA

class Solution
{
    /**
     * @param Integer $n
     * @return Integer
     */
    function countLargestGroup($n)
    {
        $groups = [];
        $largest_group = 0;
        $total_largest_groups = [];

        for ($i = 1; $i<$n + 1; $i++) {
            $sum_of_digits = $this->sumOfDigits($i);

            if (! isset($groups[$sum_of_digits])) {
                $groups[$sum_of_digits] = [];
                $groups[$sum_of_digits][] = $i;
            } else {
                $groups[$sum_of_digits][] = $i;
            }

            $group_size = sizeof($groups[$sum_of_digits]);
            $largest_group = max($largest_group, $group_size);

            if (! isset($total_largest_groups[$group_size])) {
                $total_largest_groups[$group_size] = 1;
            } else {
                $total_largest_groups[$group_size] += 1;
            }
        }

        return $total_largest_groups[$largest_group];
    }

    function sumOfDigits($n)
    {
        return array_sum(str_split((string) $n));
    }
}
