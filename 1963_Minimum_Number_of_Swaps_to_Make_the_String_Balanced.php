<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function minSwaps($s) {
        $stray  =0;
        $pair=0;
       for($i=0;$i<strlen($s)-1;$i++){
           if($s[$i]==']'){
            $pair++;
            $stray= max($pair,$stray);
           }
           else{
            $pair= $pair -1; 
           }

       }
       return ceil($stray/2);
    }
}

