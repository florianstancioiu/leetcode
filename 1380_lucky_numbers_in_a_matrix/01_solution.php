<?php
// status: Accepted
// problem link: https://leetcode.com/submissions/detail/314442491/
// runtime: faster than 61.54%

class Solution
{
    protected $min = [];

    protected $min_columns = [];

    protected $lucky_numbers = [];

    /**
     * @param Integer[][] $matrix
     * @return Integer[]
     */
    function luckyNumbers ($matrix)
    {
        $matrix_size = sizeof($matrix);

        // find minimums
        for ($i = 0; $i<$matrix_size; $i++) {
            $this->calcMin($matrix[$i], $i);
        }

        // find maximums & lucky numbers
        foreach($this->min_columns as $column) {
            $this->calcMaxAndLucky($matrix, $column);
        }

        return $this->lucky_numbers;
    }

    public function calcMaxAndLucky(array &$matrix, int $column)
    {
        $max = $matrix[0][$column];
        $max_index = 0;
        for ($i = 1; $i<sizeof($matrix); $i++) {
            $element = $matrix[$i][$column];
            if ($element > $max) {
                $max = $element;
                $max_index = $i;
            }
        }

        if ($this->min[$max_index] === $column) {
            $this->lucky_numbers[] = $matrix[$max_index][$column];
        }
    }

    public function calcMin(array &$array, int $index)
    {
        $min = $array[0];
        $min_index = 0;
        for ($i = 1; $i<sizeof($array); $i++) {
            if ($array[$i] < $min) {
                $min = $array[$i];
                $min_index = $i;
            }
        }
        $this->min[$index] = $min_index;
        $this->min_columns[$min_index] = $min_index;
    }
}
