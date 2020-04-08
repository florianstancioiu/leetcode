<?php
// dificulty: easy
// status: accepted
// link: https://leetcode.com/submissions/detail/321743291/
// runtime: NA

class Solution
{
    /**
     * @param ListNode $head
     * @return ListNode
     */
    function middleNode($head)
    {
        $nodes = [];
        $nodes[] = $head;

        while ($head->next !== null) {
            $head = $head->next;
            $nodes[] = $head;
        }

        $middle = floor(sizeof($nodes) / 2);

        return $nodes[$middle];
    }
}
