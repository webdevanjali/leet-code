<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function countPairs($nums, $target) {
        $count=0;
        for($i=0;$i<count($nums)-1;$i++){
            for($j=$i+1;$j<count($nums);$j++){
                // echo $nums[$i]+$nums[$j]."\n";
                if($nums[$i]+$nums[$j] < $target){
                    $count++;
                }
            }
        }
        return $count;
    }
}
