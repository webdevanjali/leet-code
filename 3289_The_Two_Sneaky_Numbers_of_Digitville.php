<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function getSneakyNumbers($nums) {
        $result=[];
        $frequency= array_count_values($nums);
        foreach($nums as $i=>$num){
            if($frequency[$num]>=2 && !in_array($num,$result)){
               $result[]= $num;
            }
        }
        return $result;
    }
}
