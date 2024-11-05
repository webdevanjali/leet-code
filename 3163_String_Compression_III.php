<?php
class Solution {

    /**
     * @param String $word
     * @return String
     */
    function compressedString($word) {
        $count=0;
        $string='';
        for($i=0;$i<strlen($word);$i++){
            $count++;
            if($word[$i]!==$word[$i+1] || $count>8)
            { 
                $string.=$count.$word[$i];
                $count=0;
            }
        } 
        return $string;
    }
}
