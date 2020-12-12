<?php

// wrong answer
// https://leetcode.com/submissions/detail/429824535/

class Solution
{
    /**
     * @param String $sequence
     * @param String $word
     * @return Integer
     */
    function maxRepeating($sequence, $word)
    {
        return substr_count($sequence, $word);
    }
}
