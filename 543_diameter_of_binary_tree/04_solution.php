<?php
// dificulty:
// status: wrong answer
// link:
// runtime: faster than x%

function prif($var)
{
    if (true) {
        print_r($var);
    }
}

class Solution
{
    protected $stack = [];

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function diameterOfBinaryTree($root)
    {
        $this->stack[] = [
            'val' => $root,
            'index' => 0
        ];
        $this->dfs($root);

        return 1;
    }

    protected function dfs($node)
    {
        if ($node->right !== null && $node->right->val !== null) {
            $new =  $node->right;
            
            $last_val = end($this->stack);
            $this->stack[] = [
                'val' => $new,
                'index' => $last_val['index'] + 1
            ];

            return $this->dfs($new);
        }

        if ($node->left !== null && $node->left->val !== null) {
            $new =  $node->left;

            $last_val = end($this->stack);
            $this->stack[] = [
                'val' => $new,
                'index' => $last_val['index'] + 1
            ];

            return $this->dfs($new);
        }

        $new = array_pop($this->stack);

        if (is_null($new['val']->val)) {
            return false;
        }

        return $this->dfs($new);
    }
}
