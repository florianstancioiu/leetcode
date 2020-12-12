<?php

// WRONG ANSWER
// https://leetcode.com/submissions/detail/429825542/

class Solution
{
    /**
     * @param String $sequence
     * @param String $word
     * @return Integer
     */
    function maxRepeating($sequence, $word)
    {
        $explode = explode($word, $sequence);

        return sizeof($explode);
    }
}
