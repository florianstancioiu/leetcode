<?php 

class MyHashSet {
    
    protected $array = [];
  
    /**
     * @param Integer $key
     * @return NULL
     */
    function add($key) {
        $this->array[$key] = true;
    }
  
    /**
     * @param Integer $key
     * @return NULL
     */
    function remove($key) {
        unset($this->array[$key]);
    }
  
    /**
     * Returns true if this set contains the specified element
     * @param Integer $key
     * @return Boolean
     */
    function contains($key) {
        return $this->array[$key] === true;
    }
}

/**
 * Your MyHashSet object will be instantiated and called as such:
 * $obj = MyHashSet();
 * $obj->add($key);
 * $obj->remove($key);
 * $ret_3 = $obj->contains($key);
 */