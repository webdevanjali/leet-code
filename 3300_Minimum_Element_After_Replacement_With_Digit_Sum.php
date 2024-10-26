<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function minElement($nums) {
       $min = null; 
        $sum = 0;

        foreach ($nums as $num) {
            $sum = 0; 
           
            $numStr = (string)$num;

            for ($j = 0; $j < strlen($numStr); $j++) {
                $sum += (int)$numStr[$j]; 
            }

            if ($min === null || $sum < $min) {
                $min = $sum; 
            }
        }

        return $min; 
    }
}
