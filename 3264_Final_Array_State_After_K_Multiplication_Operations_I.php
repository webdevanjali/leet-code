<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @param Integer $multiplier
     * @return Integer[]
     */
    function getFinalState($nums, $k, $multiplier) {
        for($i=0; $i<$k; $i++){
            $nums[array_search(min($nums),$nums)] *= $multiplier;
        }
        return $nums;
    }
}
