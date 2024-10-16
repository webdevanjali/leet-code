<?php
class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function sumOfMultiples($n) {
        $sum=0;
        for($i=3;$i <= $n; $i++){
           if (!($i%3) || !($i%5) || !($i%7)){
            $sum += $i;
           }
        }
        return $sum;
    }
}
