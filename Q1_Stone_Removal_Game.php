<?php
class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function canAliceWin($n) {
        $count=0;
        if($n<10)return false;
        for($i=10;$i>0;$i--){
            if($n-$i<0){
                break; 
            }
            else{ 
                $n-=$i;
                $count++;
            } 
        }
       return ($count%2==0) ? false: true;
    }
}
