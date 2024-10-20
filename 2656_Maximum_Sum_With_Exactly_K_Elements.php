<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function maximizeSum($nums, $k) {
        $max = max($nums);
        $sum =0;
        for ($i = 0; $i < $k; $i++) {
            $sum += ($max + $i);
        }
        return $sum;
    }
}
