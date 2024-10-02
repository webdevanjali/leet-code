<?php
class Solution {

    /**
     * @param Integer[] $arr
     * @return Integer[]
     */
    function arrayRankTransform($arr) {
        $count=count(array_unique($arr));
        $rank = array_fill(0, sizeof($arr), null);;
        for($i=$count;$i>0;$i--){
            $max=max($arr);
            $index = array_keys($arr,$max);
            for($j=0;$j<sizeof($index);$j++){
               $rank[$index[$j]] = $i;
                $arr[$index[$j]]=null;
            }
        }
        return $rank;
    }
}
