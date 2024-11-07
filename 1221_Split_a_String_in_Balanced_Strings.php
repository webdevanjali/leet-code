<?php 

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function balancedStringSplit($s) {
        $l=0;
        $r =0;
        for($i=0;$i<strlen($s);$i++){
            if($l == $r){
                    $count++;
                    $l = 0;
                    $r =0; 
            }
            
            ($s[$i]=='R')? $r++ : $l++;
        }
        return $count;
    }
}
