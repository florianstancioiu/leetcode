<?php

// accepted

class Solution
{
    /**
     * @param Integer[] $students
     * @param Integer[] $sandwiches
     * @return Integer
     */
    function countStudents($students, $sandwiches)
    {
        $refusals = 0;
        while (sizeof($students) !== 0) {
            reset($students);
            $student_key = key($students);

            reset($sandwiches);
            $sandwiches_key = key($sandwiches);

            if ($students[$student_key] === $sandwiches[$sandwiches_key]) {
                unset($students[$student_key]);
                unset($sandwiches[$sandwiches_key]);

                $refusals = 0;
            } else {
                $students[] = $students[$student_key];

                unset($students[$student_key]);
                $refusals++;
            }

            if ($refusals === sizeof($students)) {
                return $refusals;
            }
        }

        return 0;
    }
}
