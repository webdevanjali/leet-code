<?php
class Solution {

    /**
     * @param String $allowed
     * @param String[] $words
     * @return Integer
     */
    function countConsistentStrings($allowed, $words) {
        $i=0;
        $result=sizeof($words);
        foreach($words as $word){
            for($char=0;$char<strlen($word);$char++){
                if(strpos($allowed, $word[$char]) === false){
                    $result--;
                    break;
                }
            }
        }
        return $result;
    }
}
