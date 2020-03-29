<?php
// dificulty: medium
// status: wrong answer
// link: https://leetcode.com/submissions/detail/317228960/
// runtime: NA


class UndergroundSystem
{
    protected $records = [];
    protected $diff = 0;
    protected $total_diffs = 0;

    public function __construct()
    {
        $this->reset();
    }

    protected function reset()
    {
        $this->records = [];
        $this->diff = 0;
        $this->total_diffs = 0;
    }

    /**
     * @param Integer $id
     * @param String $stationName
     * @param Integer $t
     * @return NULL
     */
    function checkIn($id, $stationName, $t)
    {
        $this->records[] = [
            $id,
            $stationName,
            $t,
            "in"
        ];
    }

    /**
     * @param Integer $id
     * @param String $stationName
     * @param Integer $t
     * @return NULL
     */
    function checkOut($id, $stationName, $t)
    {
        $this->records[] = [
            $id,
            $stationName,
            $t,
            "out"
        ];
    }

    /**
     * @param String $startStation
     * @param String $endStation
     * @return Float
     */
    function getAverageTime($startStation, $endStation)
    {
        $size = sizeof($this->records);
        $in = [];
        $out = [];

        for ($i = 0; $i<$size; $i++) {
            $record = $this->records[$i];
            $station = $record[1];
            $in_record = $record[3] === "in";
            $card = $record[0];
            $key = $card . "_" . $station;

            if ($in_record && $station === $startStation) {
                if (! isset($in[$key])) {
                    $in[$key] = [];
                    $in[$key][] = $record;
                } else {
                    $in[$key][] = $record;
                }
            }

            if (!$in_record && $station === $endStation) {
                if (! isset($out[$key])) {
                    $out[$key] = [];
                    $out[$key][] = $record;
                } else {
                    $out[$key][] = $record;
                }
            }
        }

        $in_array_iterator = new RecursiveArrayIterator($in);
        $in_iterator = new RecursiveIteratorIterator($in_array_iterator, RecursiveIteratorIterator::LEAVES_ONLY);

        $index = 0;
        $checked_keys = [];
        foreach ($in_iterator as $key => $value) {
            $key_info = [];

            if (! $in_iterator->hasChildren()) {

                // get key data
                for ($i = 0; $i < $in_iterator->getDepth(); $i++) {
                    $key_info[] = $in_iterator->getSubIterator($i)->key();
                }

                $original_key = $key_info[0];
                $original_key_index = $key_info[1];
                $key_string = $original_key . "_" . $original_key_index;

                if (isset($checked_keys[$key_string])) {
                    print_r("we is here => " . $key_string);
                    print_r("\n");
                    continue;
                }

                $checked_keys[$key_string] = 1;

                $actual_value = $in[$original_key][$original_key_index];
                $card_id = $actual_value[0];
                $station = $actual_value[1];
                $time = $actual_value[2];

                $out_key_original = $card_id . "_" . $endStation;
                $out_key_original_index = $original_key_index;

                if (isset($out[$out_key_original][$out_key_original_index])) {
                    $out_value = $out[$out_key_original][$out_key_original_index];
                    $out_time = $out_value[2];

                    print_r("out_time: " . $out_time . " time: " . $time);

                    $this->diff += $out_time - $time;
                    $this->total_diffs++;
                }

                print_r("key => [" . $original_key . "][" . $original_key_index . "] " . " value => " . $value);
                print_r("\n");
            }

            $index++;
        }

        /*
        array_walk_recursive($in, function ($val, $key) {

            $main_key = key($in);
            print_r($main_key . "_" . $key);
            print_r("\n");


            $id = $val[0];
            $station = $val[1];

            if ($station === $startStation && isset($this->out[$key])) {
                $out_time = $this->out[$key][2];
                $this->diff += $out_time - $val[2];
                $this->total_diffs++;
            }


        });
        */

        /*
        foreach ($in as $key => $val) {
            $id = $val[0];
            $station = $val[1];

            if ($station === $startStation && isset($this->out[$key])) {
                $out_time = $this->out[$key][2];
                $this->diff += $out_time - $val[2];
                $this->total_diffs++;
            }
        }


        for ($i = 0; $i<sizeof($in); $i++) {
            $record = $this->records[$i];
            $station = $record[1],
            $in_record = $record[3] === "in";

            if ($in_record && $station === $startStation) {
                $in[] = $record;
            }
        }

        foreach ($this->in as $key => $val) {
            $id = $val[0];
            $station = $val[1];

            if ($station === $startStation && isset($this->out[$key])) {
                $out_time = $this->out[$key][2];
                $this->diff += $out_time - $val[2];
                $this->total_diffs++;
            }
        }
        */

        print_r("---------------------------------------------------");
        print_r("\n");

        $return = (float) ($this->diff / $this->total_diffs);
        $this->diff = 0;
        $this->total_diffs = 0;

        return number_format($return, 1);
    }
}
