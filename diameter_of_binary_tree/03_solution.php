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

    protected $all = [];

    protected $levels = 0;

    protected $last_action = "";

    protected $max_levels = 0;

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function diameterOfBinaryTree($root)
    {
        //print_r($root);
        //print_r("\n");
        // asta e cod deampulea rau
        // trebuie facut cu functii pure in pula mea



        $this->resetProperties();
        $left_depth = $this->getLeftDepth($root);
        $right_depth = $this->getRightDepth($root);

        print_r("left : " . $left_depth . "\n");
        print_r("right: " . $right_depth . "\n");

        return $this->max_levels;
    }

    public function getLeftDepth($root)
    {
        $this->dfs($root->left);

        $levels = $this->levels;

        $this->resetProperties();

        $this->pushRoot($root);

        return $levels;
    }

    public function getRightDepth($root)
    {
        $this->dfs($root->right);

        $levels = $this->levels;

        $this->resetProperties();

        $this->pushRoot($root);

        return $levels;
    }

    protected function resetProperties($root)
    {
        $this->stack = [];
        $this->visited = [];
        $this->levels = 0;
        $this->last_action = "push";
        $this->max_levels = 0;
    }

    protected function pushRoot($root)
    {
        $this->visited[$root->val] = 1;
        $this->stack[] = $root;
        $this->levels += 1;
        $this->last_action = "push";
    }

    protected function dfs($node)
    {
        if ($node->right !== null) {
            $new = $node->right;
            $this->levels += 1;
            if (! isset($this->visited[$new->val])) {
                $this->visited[$new->val] = 1;
                $this->stack[] = $new;
                $this->all[] = $new;
                $this->last_action = "push";
                $this->max_levels = max($this->max_levels, $this->levels);

                print_r("push: " . $new->val . "\n");
                print_r("nodes: " . $this->levels . "\n");
                print_r("----------------- \n");

                return $this->dfs($new);
            }
        }

        if ($node->left !== null) {
            $new = $node->left;
            $this->levels += 1;
            if (! isset($this->visited[$new->val])) {
                $this->visited[$new->val] = 1;
                $this->stack[] = $new;
                $this->all[] = $new;
                $this->levels += 1;
                $this->last_action = "push";
                $this->max_levels = max($this->max_levels, $this->levels);

                print_r("push: " . $new->val . "\n");
                print_r("nodes: " . $this->levels . "\n");
                print_r("----------------- \n");

                return $this->dfs($new);
            }
        }

        //print_r("i reached the point where I need to pop things from the stack \n");
        //print_r("here is the size of the stack: " . sizeof($this->stack) . " \n");

        $new = array_pop($this->stack);
        $this->last_action = "pop";
        //if ($this->last_action === "push") {
            $this->levels -= 1;
        //}


        print_r("pop: " . $new->val . "\n");
        print_r("nodes: " . $this->levels . "\n");
        print_r("~~~~~~~~~~~~~~~~~~~~~~~ \n");

        if (is_null($new)) {
            return false;
        }


        return $this->dfs($new);
    }
}
