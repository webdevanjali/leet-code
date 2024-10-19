<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function smallerNumbersThanCurrent($nums) {
        $copy=$nums;
        $length= count($nums);
        sort($copy);
        for($i=0; $i<$length;$i++){
          $position= array_search($nums[$i],$copy);
          $nums[$i]= $position;
        }
        return $nums;
    }
}
