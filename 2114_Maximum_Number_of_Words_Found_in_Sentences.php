<?php
class Solution {

    /**
     * @param String[] $sentences
     * @return Integer
     */
    function mostWordsFound($sentences) {
        $max =0;
        foreach($sentences as $s){
            $s= explode(" ", $s);
            $max = max($max, count($s));
        }
        return $max;
    }
}
