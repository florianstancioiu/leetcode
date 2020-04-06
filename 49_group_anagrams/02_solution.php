<?php
// dificulty: medium
// status: accepted
// link: https://leetcode.com/submissions/detail/320752781/
// runtime: faster than 12.55%

class Solution
{
    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($strs)
    {
        $size = sizeof($strs);
        $groups = [];
        $array = null;

        for ($i = 0; $i<$size; $i++) {
            $array = str_split($strs[$i]);
            sort($array);
            $key = implode($array);

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

}
