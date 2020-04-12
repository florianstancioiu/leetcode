<?php
// dificulty: medium
// status:
// link:
// runtime: faster than x%

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums)
    {
        $size = sizeof($nums);
        $array = [];
        $solutions = [];

        for ($i = 0; $i<$size; $i++) {
            $number = $nums[$i];
            if (! isset($array[$number])) {
                $array[$number] = 1;
            } else {
                $array[$number] +=1;
            }
        }

        for ($i = 0; $i<$size; $i++) {
            $a = $nums[$i];
            for ($j = $i + i; $j < $size - 1; $j++) {
                $b = $nums[$j];
                $c = -($a + $b);

                $double_value = $c === $a || $c === $b;

                print_r("double value: " . (int) $double_value);
                print_r("c: " . $c);
                print_r("\n");

                if (isset($array[$c])) {
                    $item = [$a, $b, $c];
                    sort($item);
                    $key = "$item[0]$item[1]$item[2]";

                    if ($double_value) {
                        if ($array[$c] > 1) {
                            $solutions[$key] = $item;
                            $sarray[$c] -= 1;
                        }
                    } else {
                        $solutions[$key] = $item;
                    }
                }
            }


            print_r('----------------------');
            print_r("\n");
        }


        return $solutions;
    }
}
