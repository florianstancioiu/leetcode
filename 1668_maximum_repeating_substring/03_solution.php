<?php

// WRONG ANSWER
// https://leetcode.com/submissions/detail/429827773/

class Solution
{
    /**
     * @param String $sequence
     * @param String $word
     * @return Integer
     */
    function maxRepeating($sequence, $word)
    {
        $string = "";
        $index = 0;

        while (strlen($sequence) != 0 ) {
            $string .= $sequence[0];
            $sequence = substr($sequence, 1);

            if (strpos($string, $word) !== false) {
                $index++;
                $string = str_replace($word, "", $string);
            }
        }

        return $index;
    }
}
