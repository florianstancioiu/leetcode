<?php
// dificulty: medium
// status: accepted
// link: https://leetcode.com/submissions/detail/314458361/
// runtime: 136 ms

class Solution
{
    protected $last_light = 0;

    protected $total_lights = 0;

    protected $total_blue_lights = 0;

    /**
     * @param Integer[] $light
     * @return Integer
     */
    function numTimesAllBlue($light)
    {
        for ($i=0; $i<sizeof($light); $i++) {
            $this->total_lights = $i + 1;

            if ($i === 0) {
                $this->last_light = $light[0];
            }

            if ($light[$i] > $this->last_light) {
                $this->last_light = $light[$i];
            }

            if ($this->last_light === $this->total_lights) {
                $this->total_blue_lights++;
            }
        }

        return $this->total_blue_lights;
    }
}
