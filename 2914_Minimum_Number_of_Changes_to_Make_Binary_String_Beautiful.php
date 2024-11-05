<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function minChanges($s) {
        $stack =[];
        for($i=0;$i<strlen($s);$i++){
            if(!empty($stack) && $i >0 && $i%2 && end($stack) == $s[$i]){
                array_pop($stack);
            }
            else{
                $stack[]=$s[$i];
            }
        }
        $zeros = count(array_filter($stack, function($value) {
                    return $value == 0; 
                }));
        $len = count($stack);
        return ($zeros < $len-$zeros )? $zeros : $len-$zeros;
    }
}
