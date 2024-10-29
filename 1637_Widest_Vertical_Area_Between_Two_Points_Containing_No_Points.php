<?php

class Solution {

    /**
     * @param Integer[][] $points
     * @return Integer
     */
    function maxWidthOfVerticalArea($points) {
        foreach($points as $point){
            $width[]=$point[0];
        }
        sort($width);
        $range=null;
        for($i=0;$i<count($width)-1;$i++){
            $dif = $width[$i+1] - $width[$i];
            if($dif > $range && $width[$i+1] !== $width[$i]){
                $range =$dif;
            }
        }
        return  ($range == null) ? 0 : $range;
    }
}
