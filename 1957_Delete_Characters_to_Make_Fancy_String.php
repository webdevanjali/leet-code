<?php
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function makeFancyString($s) {
        $output=$s[0].$s[1];
        for($i=2;$i<strlen($s);$i++){
            if($s[$i-1] != $s[$i] || $s[$i-2] != $s[$i]){
               $output.= $s[$i];
            }
        }
        return $output;
    }
}
