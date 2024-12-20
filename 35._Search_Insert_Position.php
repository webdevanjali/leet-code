<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        $left= 0;
        $right= count($nums)-1;
        while($left<=$right){
            $mid = $left + ($right-$left)/ 2;
            $mid = floor($mid);
            if($nums[$mid] == $target) return $mid;
            else if($nums[$mid]<$target)  $left = $mid+1;
            else $right = $mid-1;
        }
        return $left;
    }
}
