<?php
// dificulty:
// status: wrong answer
// link: 
// runtime: faster than x%

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */
class Solution
{
    /**
     * @param TreeNode $root
     * @return Integer
     */
    function diameterOfBinaryTree($root)
    {
        $max_right = 0;
        $max_left = 0;
        $node = $root;
        while ($node->right !== null) {
            $node = $node->right;
            $max_right += 1;
        }

        $node = $root;
        while ($node->left !== null) {
            $node = $node->left;
            $max_left += 1;
        }

        return $max_left + $max_right;
    }
}
