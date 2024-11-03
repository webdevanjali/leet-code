<?php
class Solution {

    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s) {
        $length=count($s);
        $halfLength = $length / 2;
        for($i=0;$i<$halfLength;$i++) {
            $temp = $s[$i];
            $s[$i] = $s[$length - $i - 1];
            $s[$length - $i - 1] = $temp;
        }
        // $s=array_reverse($s); //by using built-in function O(n) complexity  //
    }
}
