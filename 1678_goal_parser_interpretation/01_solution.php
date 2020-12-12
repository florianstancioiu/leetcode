<?php

// accepted
// https://leetcode.com/submissions/detail/429831235/

class Solution
{
    /**
     * @param String $command
     * @return String
     */
    function interpret($command)
    {
        return str_replace(
            [
                '()',
                '(al)'
            ],
            [
                'o',
                'al'
            ],
            $command
        );
    }
}
