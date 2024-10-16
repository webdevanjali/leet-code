<?php
class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function subtractProductAndSum($n) {
        $sum=0;
        $product=1;
        foreach (str_split((string)$n) as $digit) {
           $sum += $digit;
           $product *= $digit;
        }
        return $product - $sum;
    }
}
