<?php

// Accepted
// https://leetcode.com/submissions/detail/429829241/

class Solution
{
    /**
     * @param String $sequence
     * @param String $word
     * @return Integer
     */
    function maxRepeating($sequence, $word)
    {
        $string = $word;
        $index = 0;

        while (strpos($sequence, $string) !== false) {
            $index++;
            $string .= $word;
        }

        return $index;
    }
}
