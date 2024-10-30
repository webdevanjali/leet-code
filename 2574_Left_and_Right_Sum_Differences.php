<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function leftRightDifference($nums) {
        $leftSum=[];
        $rightSum=[];
        $lSum=0;
        $rSum=0;
        $count=count($nums);
        $Sum=[];
        for($i=0;$i<$count; $i++){
            if(isset($nums[$i-1])){
                $lSum += $nums[$i-1];
                $leftSum[]=$lSum;
            }
            else $leftSum[]=0;
            if(isset($nums[$count - $i])){
                $rSum += $nums[$count - $i];
                $rightSum[]=$rSum;
            }
            else $rightSum[]=0;
        }
        for($i=0;$i<$count; $i++){
            $Sum[]=abs($leftSum[$i]-$rightSum[$count-$i-1]);
        }
        return $Sum;
    }
}
