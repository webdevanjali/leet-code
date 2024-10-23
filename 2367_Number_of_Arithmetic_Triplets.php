<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $diff
     * @return Integer
     */
    function arithmeticTriplets($nums, $diff) {
        $length=sizeof($nums);
        $result=0;
        for ($i=0;$i<$length;$i++){
            for($j=$i+1;$j<$length;$j++){
                if($nums[$j] - $nums[$i] == $diff ){
                    for($k=$j+1;$k<$length;$k++){
                        if($nums[$k] - $nums[$j] == $diff){
                            $result++;
                        }
                    }
                }
            }
        }
        return $result;
    }
}
