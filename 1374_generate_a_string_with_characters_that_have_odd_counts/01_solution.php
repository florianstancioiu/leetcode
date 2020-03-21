<?php
// dificulty: easy
// status: accepted
// link: https://leetcode.com/submissions/detail/314452088/
// runtime: 4ms

class Solution
{
    protected $chars = [
        "a",
        "b"
    ];

    /**
     * @param Integer $n
     * @return String
     */
    function generateTheString($n) : string
    {
        if ($n % 2 === 1) {
            return $this->fillOddString($n, 0);
        }

        $string = $this->fillOddString($n - 1, 0);
        $string .= $this->chars[1];

        return $string;
    }

    public function fillOddString(int $nr, int $char_index): string {
        $string = "";
        for ($i=0; $i<$nr; $i++) {
            $string .= $this->chars[$char_index];
        }

        return $string;
    }
}
