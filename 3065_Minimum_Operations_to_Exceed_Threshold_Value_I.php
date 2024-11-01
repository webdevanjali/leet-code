<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function minOperations($nums, $k) {
        // $count=0;
        // foreach($nums as $num){
        //     if($k>$num){
        //         $count++;
        //     }
        // }
        return count(array_filter($nums, fn($num) => $k > $num));
    }
}
