<?php
// dificulty: medium
// status: accepted
// link: https://leetcode.com/submissions/detail/320757036/
// runtime: faster than 12.50%
// NOTE: There's something wrong with the leetcode chart, I literally copy pasted the best version and I got the same runtime

class Solution
{
    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($strs)
    {
        $groups = [];

        for ($i = 0; $i<sizeof($strs); $i++) {
            $array = str_split($strs[$i]);
            sort($array);
            $groups[implode($array)][] = $strs[$i];
        }

        return $groups;
    }
}
