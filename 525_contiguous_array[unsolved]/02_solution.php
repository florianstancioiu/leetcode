<?php

// wrong answer

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findMaxLength($nums)
    {
        $lengthArray = [];
        $size = sizeof($nums);

        for ($i = 0; $i < sizeof($nums); $i++) {
            $length = 0;

            while($nums[$i + 1] === $nums[$i] + 1) {
                $i += 1;
                $length += 1;
            }

            $lengthArray[] = $length;
            $length = 0;

            while($nums[$i - 1] === $nums[$i] - 1) {
                $i += 1;
                $length += 1;
            }

            $lengthArray[] = $length;
            $length = 0;
        }
    }
}
