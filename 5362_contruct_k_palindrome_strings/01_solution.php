<?php
// dificulty:
// status:
// link:
// runtime: UNSUBMITTED


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

        print_r("total_odd_chars: " . $total_odd_chars);
        print_r("\n");
        print_r("total_unique_chars: " . $total_unique_chars);
        print_r("\n");

        if ($total_odd_chars > 1) {
            return false;
        }

        $available_chars = $total_unique_chars - sizeof($total_odd_chars);
        $crude_total = $available_chars * 2;

        return $crude_total > $k;
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
                if (! isset($odd_chars[$char])) {
                    $odd_chars[$char] = true;
                }
            } else {
                unset($odd_chars[$char]);
            }
        }

        return array_keys($odd_chars);
    }

    public function getTotalUniqueChars(string $s) : int
    {
        $uniques = array_unique(explode("", $s));

        return sizeof($uniques);
    }
}
