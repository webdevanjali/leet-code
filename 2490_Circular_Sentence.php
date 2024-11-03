<?php
class Solution {

    /**
     * @param String $sentence
     * @return Boolean
     */
    function isCircularSentence($sentence) {
       $array= explode(' ',$sentence);
        if( $sentence[0]==$sentence[strlen($sentence)-1]){
            for($i=0;$i<count($array)-1;$i++){
                if($array[$i][-1] !== $array[$i+1][0]){
                    return false;
                }
            }
        }
        else return false;
       return true; 
    }
}
