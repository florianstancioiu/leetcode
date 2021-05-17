<?php 

class MyQueue {

    protected $stack;

    /**
     * Initialize your data structure here.
     */
    function __construct() {
        $this->stack = new SplStack();    
    }
  
    /**
     * Push element x to the back of queue.
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
        $this->stack->push($x);
    }
  
    /**
     * Removes the element from in front of queue and returns that element.
     * @return Integer
     */
    function pop() {
        return $this->stack->shift();
    }
  
    /**
     * Get the front element.
     * @return Integer
     */
    function peek() {
        return $this->stack->bottom();
    }
  
    /**
     * Returns whether the queue is empty.
     * @return Boolean
     */
    function empty() {
        return $this->stack->isEmpty();
    }
}

/**
 * Your MyQueue object will be instantiated and called as such:
 * $obj = MyQueue();
 * $obj->push($x);
 * $ret_2 = $obj->pop();
 * $ret_3 = $obj->peek();
 * $ret_4 = $obj->empty();
 */