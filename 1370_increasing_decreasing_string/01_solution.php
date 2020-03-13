<?php
// status: Time Limit Exceeded
// problem link: https://leetcode.com/problems/increasing-decreasing-string/
// result link: https://leetcode.com/contest/biweekly-contest-21/submissions/detail/310176671/
// runtime: NA
// memory: NA

class Solution {
    protected $vals = [];

    protected $valsCount = [];

    protected $valsReversed = [];

    protected $result = "";

    protected $string = "";

    protected $last = null;

    /**
     * @param String $s
     * @return String
     */
    function sortString($s) {
        $this->string = $s;
        $this->vals = str_split($this->string);

        // create vals count
        for ($i=0; $i<strlen($this->string); $i++) {
            $char = $this->string[$i];

            if (! isset($this->valsCount[$char])) {
                $this->valsCount[$char] = 1;
            } else {
                $this->valsCount[$char] += 1;
            }
        }

        array_unique($this->vals);
        sort($this->vals);
        $this->valsReversed = $this->vals;
        rsort($this->valsReversed);

        $i = 1000;
        while (sizeof($this->valsCount) !== 0 && $i) {
            $this->smallest();
            $this->biggest();
        }

        return $this->result;
    }

    function smallest() {
        foreach($this->vals as $key => $val) {
            if ($val > $this->last) {
                if (isset($this->valsCount[$val]) && $this->valsCount[$val] > 0) {
                    $this->result .= $val;
                    $this->last = $val;
                    $this->valsCount[$val]--;
                } else {
                    unset($this->vals[$key]);
                    unset($this->valsReversed[$key]);
                    unset($this->valsCount[$val]);
                }
            }
        }
        $this->last = null;
    }

    function biggest() {
        foreach($this->valsReversed as $key => $val) {
            if (is_null($this->last)) {
                $this->last = $val;

                if ($this->valsCount[$val] > 0) {
                    $this->result .= $val;
                    $this->last = $val;
                    $this->valsCount[$val]--;
                } else {
                    unset($this->vals[$key]);
                    unset($this->valsReversed[$key]);
                    unset($this->valsCount[$val]);
                }
            }

            if ($val < $this->last) {
                if ($this->valsCount[$val] > 0) {
                    $this->result .= $val;
                    $this->last = $val;
                    $this->valsCount[$val]--;
                } else {
                    unset($this->vals[$key]);
                    unset($this->valsReversed[$key]);
                    unset($this->valsCount[$val]);
                }
            }
        }
        $this->last = null;
    }
}

echo "<pre>";
/*
print_r((new Solution())->sortString("aaaabbbbcccc") . "\n");
print_r((new Solution())->sortString("leetcode") . "\n");
print_r((new Solution())->sortString("rat") . "\n");
print_r((new Solution())->sortString("ggggggg") . "\n");
print_r((new Solution())->sortString("spo") . "\n");
*/
print_r((new Solution())->sortString("jkzkydvxewqjfx") . "\n");
