<?php
class Solution {

    /**
     * @param String $s
     * @param Integer[] $indices
     * @return String
     */
    function restoreString($s, $indices) {
        $length= strlen($s);
        $result='';
        for($i=0; $i<$length; $i++){
            $result[$indices[$i]] = $s[$i];
        }
        return $result;
    }
}
