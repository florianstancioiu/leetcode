<?php

// accepted

class Solution
{
    /**
     * @param String $allowed
     * @param String[] $words
     * @return Integer
     */
    function countConsistentStrings($allowed, $words)
    {
        $count = 0;
        for ($i = 0; $i<sizeof($words); $i++) {
            $word = $words[$i];

            if ($this->inAllowed($word, $allowed)) {
                $count++;
            }
        }

        return $count;
    }

    function inAllowed($word, $allowed)
    {
        $explode = str_split($word);

        for ($i = 0; $i<sizeof($explode); $i++) {
            $character = $explode[$i];

            if (strpos($allowed, $character) === false) {
                return false;
            }
        }

        return true;
    }
}
