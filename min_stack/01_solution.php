<?php
// dificulty: easy
// status: accepted
// link: https://leetcode.com/submissions/detail/322680096
// runtime: faster than 100.00% (currently the best solution)

class MinStack
{
    protected $vals = [];

    protected $min = null;

    /**
     * @param Integer $x
     * @return NULL
     */
    function push($x)
    {
        $size = sizeof($this->vals);
        $this->vals[$size] = $x;

        if ($size === 0) {
            $this->min = $x;
        }

        if ($x < $this->min) {
            $this->min = $x;
        }
    }

    /**
     * @return NULL
     */
    function pop()
    {
        $last = array_pop($this->vals);

        if ($last === $this->min) {
            $this->min = min($this->vals);
        }

        return $last;
    }

    /**
     * @return Integer
     */
    function top()
    {
        $top_index = sizeof($this->vals) - 1;

        return isset($this->vals[$top_index]) ? $this->vals[$top_index] : null;
    }

    /**
     * @return Integer
     */
    function getMin()
    {
        return $this->min;
    }
}
