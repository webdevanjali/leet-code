<?php

class CustomStack {
    /**
     * @param Integer $maxSize
     */
    function __construct($maxSize) {
        $this->maxSize=$maxSize;
        $this->stack =[];

    }
  
    /**
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
         if (count($this->stack) < $this->maxSize) {
             $this->stack[] = $x;
            //  return $this->stack ;
        }
    }
  
    /**
     * @return Integer
     */
    function pop() {
        $index = count($this->stack) - 1;
        if (empty($this->stack)) {
            return -1;
        }
        return array_pop($this->stack);
    }
  
    /**
     * @param Integer $k
     * @param Integer $val
     * @return NULL
     */
    function increment($k, $val) {
            $limit = min($k, count($this->stack));
            for ($i = 0; $i < $limit; $i++) {
                $this->stack[$i] += $val;
            }
        }
    }


/**
 * Your CustomStack object will be instantiated and called as such:
 * $obj = CustomStack($maxSize);
 * $obj->push($x);
 * $ret_2 = $obj->pop();
 * $obj->increment($k, $val);
 */
