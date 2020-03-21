<?php
// dificulty: easy
// status:
// link:
// runtime: faster than x%

class Solution
{
    /**
     * @param Integer[] $arr1
     * @param Integer[] $arr2
     * @param Integer $d
     * @return Integer
     */
    function findTheDistanceValue($arr1, $arr2, $d)
    {
        $distance_elements = 0;

        for ($i = 0; $i<sizeof($arr1); $i++) {
            $distance_elements++;
            for ($j = 0; $j<sizeof($arr2); $j++) {
                if (abs($arr1[$i] - $arr2[$j]) <= $d) {
                    $distance_elements--;
                    break;
                }
            }
        }

        return $distance_elements;
    }
}
