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

            /*
            if (in_array($seat[1],  $excluded_columns)) {
                continue;
            }
            */

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
        $startings_to_ignore = [0, 2, 4, 6]; //3, 5, 7, 9]

        print_r($ocupied_seats_per_row);

        foreach ($ocupied_seats_per_row as $row) {
            $columns = $row["columns"];
            $count = 0;
            for ($j = 1; $j<9; $j++) {

                if (isset($columns[$j + 1])) {
                    print_r(" skip column: " . ($columns[$j + 1] - 1));
                    print_r("\n");
                    $count = 0;
                    continue;
                } else {
                    $count++;
                }


                print_r(" index: ". $j);
                print_r(" count: " . $count);
                print_r(" groups: ". $max_groups);
                print_r("\n");



                if ($count === 0 && in_array($j, $startings_to_ignore)) {
                    $count = 0;
                    continue;
                }


                if ($count === 4) {
                    print_r(" start: " . ($j - 3) . " end: ". $j);
                    print_r("\n");
                    $max_groups += 1;
                    $count = 0;
                    continue;
                }


            }
            print_r("\n");
        }

        print_r("*******************************************");
        print_r("\n");

        return $max_groups;
    }
}
