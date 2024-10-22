<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function runningSum($nums) {
        $sum=[];
        foreach($nums as $i => $num){ 
            $sum[] = $sum[$i-1] + $num;
        }
        return $sum;
    }
}
