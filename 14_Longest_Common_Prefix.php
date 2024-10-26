<?php
class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        $common="";
        $same=true;
        $minLength = min(array_map('strlen', $strs));
        for($i=0;$i<$minLength;$i++) {
            $char=$strs[0][$i];
            for($j=0;$j<count($strs);$j++){
                if(!($strs[$j][$i]==$char)){
                    $same=false;
                    break;
                }
            }
            if($same==true) {
                $common .= $strs[0][$i];
            }
            else break;
        } 
        return $common;
     }

}
