<?php
class Solution {

    /**
     * @param String $s
     * @param String $goal
     * @return Boolean
     */
    function rotateString($s, $goal) {
        
        return ($s == $goal) || (strlen($goal) == strlen($s) && strpos($s . $s, $goal) !== false);

        //beginners friendly syntax
        // if($s==$goal){
        //     return true;
        // }
        // elseif((strlen($goal)==strlen($s))){
        //    return (strpos($s.$s,$goal))?true:false ;
        // }
        // else return false;


    }
}
