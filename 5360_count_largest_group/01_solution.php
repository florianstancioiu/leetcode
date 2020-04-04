<?php
// dificulty: easy
// status: wrong answer
// link: https://leetcode.com/contest/biweekly-contest-23/submissions/detail/319604857/
// runtime: NA

class Solution
{
    /**
     * @param String $s
     * @param Integer $k
     * @return Boolean
     */
    public function canConstruct($s, $k)
    {
        $odd_chars = $this->charsWithOddOccurences($s);
        $total_odd_chars = sizeof($odd_chars);
        $total_unique_chars = $this->getTotalUniqueChars($s);

        /*
        if ($total_unique_chars < 1) {
            return false;
        }
        */

        $available_chars = $total_unique_chars - sizeof($total_odd_chars);

        if (($available_chars / $k) < $k) {
            return false;
        }

        $crude_total = $available_chars * 2 + 1;

        print_r("string: " . $s);
        print_r("\n");
        print_r("crude_total: " . $crude_total);
        print_r("\n");

        return (bool) ($available_chars / $k >= 1);
    }

    public function charsWithOddOccurences(string $s) : array
    {
        $chars = [];
        $odd_chars = [];

        for ($i = 0; $i<strlen($s); $i++) {
            $character = $s[$i];

            if (! isset($chars[$character])) {
                $chars[$character] = 1;
            } else {
                $chars[$character] += 1;
            }

            if ($chars[$character] % 2 === 1) {
                $odd_chars[$character] = true;
            } else {
                unset($odd_chars[$character]);
            }
        }

        return array_keys($odd_chars);
    }

    public function getTotalUniqueChars(string $s) : int
    {
        $uniques = array_unique(str_split($s));

        return sizeof($uniques);
    }
}
