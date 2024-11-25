<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maximumCount($nums) {
        $length=count($nums);
        for($i=$length-1; $i>=0; $i--){
            if($nums[$i]>0){
                    $positiveCount++;    
            }
            else if($nums[$i]<0) {
                    $negativeCount++;
            }
        }

     return max($negativeCount,$positiveCount)??0; 
    }
}
