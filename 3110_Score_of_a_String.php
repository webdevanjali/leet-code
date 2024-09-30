<?php 

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function scoreOfString($s) {
        $score =0;
        for($i=0;$i< (strlen($s)-1);$i++){
           $score += abs(ord($s[$i]) - ord($s[$i + 1]));
        }
        return $score;
    }
}
