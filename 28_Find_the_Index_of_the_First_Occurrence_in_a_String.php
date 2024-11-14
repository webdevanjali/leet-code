<?php

class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
        $hayLen = strlen($haystack);
        $stackLen = strlen($needle);
        for($i=0; $i<$hayLen; $i++){
            if($haystack[$i]==$needle[0]){
                for($j=0; $j<$stackLen; $j++){
                    if($haystack[$i+$j]!==$needle[$j]) break;                        
                }
                 if($j == $stackLen ) return $i;
            }
        }
        return -1;
    }
}
