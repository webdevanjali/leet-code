<?php
class Solution {

    /**
     * @param Integer $start
     * @param Integer $goal
     * @return Integer
     */
    function minBitFlips($start, $goal) {
        $binaryLengthStart = (int)log($start, 2) + 1; 
        $binaryLengthGoal= (int)log($goal, 2) + 1; 
        $flipCount=0;
        for ($i = 0; $i < max($binaryLengthStart,$binaryLengthGoal); $i++) {
            $a = $start & (1 << $i);
            $b = $goal & (1 << $i);
            if ($a=== $b) {
            } else {
               $flipCount++;
            }
        }
        return $flipCount;
    }
}
