<?php
class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return String
     */
    function truncateSentence($s, $k) {
        $count=0;
        $string='';
        $len = strlen($s);
        for($i=0;$i<$len; $i++){
            if($s[$i] == " ") $count++; 
            if ($count < $k) $string .= $s[$i]; 
            else return $string;
        }
        return $s;
    }
}

