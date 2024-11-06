<?php
class Solution {

    /**
     * @param Integer[] $height
     * @param Integer $threshold
     * @return Integer[]
     */
    function stableMountains($height, $threshold) {
        $output=[];
        for($i=1;$i<count($height);$i++){
            if($height[$i-1]>$threshold){
                $output[]=$i;
            }
        }
        return $output;
    }
}
