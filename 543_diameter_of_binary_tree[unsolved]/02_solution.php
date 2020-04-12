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
    protected $visited = [];

    protected $stack = [];

    protected $levels = 0;

    protected $max_levels = 0;

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function diameterOfBinaryTree($root)
    {
        // asta e cod deampulea rau
        // trebuie facut cu functii pure in pula mea
        $this->dfs($root->right);
        $max_levels_right = $this->max_levels;
        $this->resetProperties();
        $this->dfs($root->left);
        $max_levels_left = $this->max_levels;

        return $max_levels_left + $max_levels_right;
    }

    protected function resetProperties()
    {
        $this->stack = [];
        $this->visited = [];
        $this->levels = 0;
        $this->max_levels = 0;
    }

    protected function dfs($node)
    {
        if ($node->right !== null) {
            $new = $node->right;
            if (! isset($this->visited[$new->val])) {
                $this->visited[$new->val] = 1;
                $this->stack[] = $new;
                $this->levels += 1;
                $this->max_levels = max($this->max_levels, $this->levels);

                return $this->dfs($new);
            }
        }

        if ($node->left !== null) {
            $new = $node->left;
            if (! isset($this->visited[$new->val])) {
                $this->visited[$new->val] = 1;
                $this->stack[] = $new;
                $this->levels += 1;
                $this->max_levels = max($this->max_levels, $this->levels);

                return $this->dfs($new);
            }
        }

        print_r($this->levels);

        // make sure there's an end to the madness
        if ($this->levels === 1) {
            return false;
        }

        $new = array_pop($this->stack);
        $this->levels -= 1;

        return $this->dfs($new);
    }
}
