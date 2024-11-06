<?php
	class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function canSortArray($nums) {
        $index=0;
        $arrays=[];
        for ($i=0;$i<count($nums);$i++){
            $countOne = substr_count(decbin($nums[$i]), '1');
            if($i == 0 || $countOne == substr_count(decbin($nums[$i-1]), '1')){
                $arrays[$index][]= $nums[$i];
            }
            else{
                sort($arrays[$index]);
                $index++;
                $arrays[$index][]= $nums[$i];
            }
        }
        sort($arrays[$index]);
        for($i=0;$i<count($arrays)-1;$i++){
            if(end($arrays[$i]) > reset($arrays[$i + 1])){
                return false;
            }
        }
        return true;
        
    }
}
