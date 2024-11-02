<?php
class Solution {

    /**
     * @param String $word
     * @param String $ch
     * @return String
     */
    function reversePrefix($word, $ch) {
        $pos=strpos($word,$ch);
        $substr = substr($word, 0, $pos+1);
        if(strpos($word,$ch)){
            for($i=$pos;$i>=0;$i--){
               $word[$i]=$substr[$pos-$i];
            }
        }
        return $word;
    }
}
