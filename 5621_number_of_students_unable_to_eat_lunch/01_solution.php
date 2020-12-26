<?php

class Solution
{
    /**
     * @param Integer[] $students
     * @param Integer[] $sandwiches
     * @return Integer
     */
    function countStudents($students, $sandwiches)
    {
        array_sort($students);
        array_sort($sandwiches);

        $count = 0;
        for ($i = 0; $i<sizeof($students); $i++) {
            if ($students[$i] === $sandwiches[$i]) {
                $count++;
            }
        }

        return sizeof($students) - $count;
    }
}
