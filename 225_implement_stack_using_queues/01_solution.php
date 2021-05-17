<?php 

class MyStack {
    
    protected $queue;
    
    /**
     * Initialize your data structure here.
     */
    function __construct() {
        $this->queue = new SplQueue;    
    }
  
    /**
     * Push element x onto stack.
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
        $this->queue->push($x);
    }
  
    /**
     * Removes the element on top of the stack and returns that element.
     * @return Integer
     */
    function pop() {
        return $this->queue->pop();
    }
  
    /**
     * Get the top element.
     * @return Integer
     */
    function top() {
        return $this->queue->top();
    }
  
    /**
     * Returns whether the stack is empty.
     * @return Boolean
     */
    function empty() {
        return $this->queue->isEmpty();
    }
}

/**
 * Your MyStack object will be instantiated and called as such:
 * $obj = MyStack();
 * $obj->push($x);
 * $ret_2 = $obj->pop();
 * $ret_3 = $obj->top();
 * $ret_4 = $obj->empty();
 */