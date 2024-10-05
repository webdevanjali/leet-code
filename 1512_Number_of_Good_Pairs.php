<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function numIdenticalPairs($nums) {
        $count = 0;
        $frequency = [];
        
        foreach ($nums as $num) {
            if (isset($frequency[$num])) {
                $count += $frequency[$num]; 
                $frequency[$num]++; 
            } else {
                $frequency[$num] = 1; 
            }
        }
        return $count;
    }

}
