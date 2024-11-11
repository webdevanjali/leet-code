<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Float
     */
    function minimumAverage($nums) {
        $count = count($nums)/2;
        for($i=0; $i<$count; $i++){
            $min = min($nums);
            $max = max($nums);
            unset($nums[array_search($min,$nums)]);
            unset($nums[array_search($max,$nums)]);
            $sum = ($min+$max)/2;
            $smallest = ($i>0)? min($smallest, $sum) : $sum;
        }
        return $smallest ?? 0 ;
    }
}
