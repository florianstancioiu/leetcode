<?php
// dificulty: medium
// status: wrong answer
// link: https://leetcode.com/submissions/detail/317050543/
// runtime: NA

class UndergroundSystem
{
    protected $in = [];
    protected $out = [];
    protected $diff = 0;
    protected $total_diffs = 0;

    public function __construct()
    {
        $this->reset();
    }

    protected function reset()
    {
        $this->in = [];
        $this->out = [];
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
        $key = $id . "_" . strtolower($station);
        $this->in[$key] = [
            $id,
            $stationName,
            $t
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
        $key = $id . "_" . strtolower($station);
        $this->out[$key] = [
            $id,
            $stationName,
            $t
        ];
    }

    /**
     * @param String $startStation
     * @param String $endStation
     * @return Float
     */
    function getAverageTime($startStation, $endStation)
    {
        $size = sizeof($this->in);
        $records = [];

        foreach ($this->in as $key => $val) {
            $id = $val[0];
            $station = $val[1];

            if ($station === $startStation && isset($this->out[$key])) {

                $out_time = $this->out[$key][2];
                $this->diff += $out_time - $val[2];
                $this->total_diffs++;
            }
        }


        $return = (float) ($this->diff / $this->total_diffs);

        $this->diff = 0;
        $this->total_diffs = 0;

        return number_format($return, 0);
    }
}
