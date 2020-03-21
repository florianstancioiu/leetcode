<?php
// status: Accepted
// link: https://leetcode.com/submissions/detail/314447146/
// runtime: 52ms

class CustomStack
{
    protected $max_size = null;

    protected $size = 0;

    protected $stack = [];

    /**
     * @param Integer $max_size
     */
    function __construct($max_size)
    {
        $this->max_size = $max_size;
    }

    /**
     * @param Integer $x
     * @return NULL
     */
    function push($x)
    {
        if ($this->size < $this->max_size) {
            array_push($this->stack, $x);

            $this->size++;
        }
    }

    /**
     * @return Integer
     */
    function pop()
    {
        if ($this->size > 0) {
            $this->size--;

            return array_pop($this->stack);
        }

        return -1;
    }

    /**
     * @param Integer $k
     * @param Integer $val
     * @return NULL
     */
    function increment($k, $val)
    {
        $limit = $k > $this->size ? $this->size : $k;

        for ($i=0; $i<$limit; $i++) {
            $this->stack[$i] += $val;
        }
    }
}
