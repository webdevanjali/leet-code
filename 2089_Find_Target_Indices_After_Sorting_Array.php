<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */

    function targetIndices($nums, $target) {
        sort($nums);
        $list=[];
        for($i=0; $i<count($nums); $i++){
            if($nums[$i]==$target) $list[] = $i;
            elseif($nums[$i]>$target) return $list;
        }
        return $list;
    }
}

