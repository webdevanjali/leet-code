<?php
class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function minimumSum($num) {
        $num= str_split((string)$num);
        sort($num);
        $sum=0;
        $halfLength = count($num)/2;
        for ($i=0;$i<$halfLength;$i++){
            $sum= $sum + ($num[$i].$num[$halfLength+$i]);
        }
        return $sum;
    }
}
