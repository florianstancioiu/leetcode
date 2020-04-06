<?php
// dificulty: medium
// status: Wrong Answer
// link: https://leetcode.com/submissions/detail/320742686/
// runtime: NA

class Solution
{
    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($strs)
    {
        $size = sizeof($strs);
        $groups = []; // totalCharacters_uniqueCharacters_value => []
        for ($i = 0; $i<$size; $i++) {
            $key = $this->getStringKey($strs[$i]);

            if (! isset($groups[$key])) {
                $groups[$key] = [
                    $strs[$i]
                ];
            } else {
                $groups[$key][] = $strs[$i];
            }
        }

        return $groups;
    }

    protected function getStringKey(string $string) : string
    {
        $total_chars = strlen($string);
        $unique_chars = 0;
        $chars_sum = 0;

        $chars = [];
        for ($i = 0; $i<$total_chars; $i++) {
            $char = $string[$i];
            $chars_sum += ord($char);

            if (! isset($chars[$char])) {
                $chars[$char] = $char;
                $unique_chars += 1;
            }
        }

        return $total_chars . "_" . $unique_chars . "_" . $chars_sum;
    }
}
