<?php
// dificulty:
// status:
// link:
// runtime: faster than x%
// Fuck this problem in particular

class Solution
{
    /**
     * @param Integer $n
     * @param Integer[][] $reservedSeats
     * @return Integer
     */
    function maxNumberOfFamilies($n, $reservedSeats) : int
    {
        $ocupied_seats_per_row = [];
        $ocuppied_rows = [];
        $unocupied_rows = 0;
        $max_groups_on_empty_row = 2;
        $max_groups = 0;
        $excluded_columns = [0, 9, 10];

        for ($i=0; $i<sizeof($reservedSeats); $i++) {
            $seat = $reservedSeats[$i];
            $ocuppied_rows[$seat[0]] = 1;

            if (in_array($seat[1],  $excluded_columns)) {
                continue;
            }

            if (!isset($ocupied_seats_per_row[$seat[0]])) {
                $ocupied_seats_per_row[$seat[0]] = [
                    "total" => 1,
                    "columns" => [
                        $seat[1] => $seat[1]
                    ]
                ];
            } else {
                $ocupied_seats_per_row[$seat[0]]["total"] += 1;
                $ocupied_seats_per_row[$seat[0]]["columns"][$seat[1]] = $seat[1];
            }
        }

        $empty_rows = $n - sizeof($ocuppied_rows);
        $max_groups = $empty_rows * $max_groups_on_empty_row;

        $excluded_start_columns = [2,4,6];
        /*

        */

        foreach ($ocupied_seats_per_row as $row) {
            $columns = $row["columns"];
            $count = 0;
            for ($j = 1; $j<10; $j++) {

                if (!isset($columns[$j])) {
                    $count++;
                } else {
                    $count = 0;
                }

                if ($count === 4) {
                    $max_groups += 1;
                    $count = 0;
                }

                print_r(" index: ". ($j + 1));
                print_r(" count: " . $count);
                print_r(" groups: ". $max_groups);
                print_r("\n");
            }
            print_r("\n");
        }

        return $max_groups;
    }
}
