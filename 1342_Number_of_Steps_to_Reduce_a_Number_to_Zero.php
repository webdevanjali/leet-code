<?php
class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function numberOfSteps($num) {
        while($num){
            $num = $num % 2 == 0 ? $num / 2 : $num - 1;
            $steps++;
        }
        return $steps ?? 0;
    }
}
