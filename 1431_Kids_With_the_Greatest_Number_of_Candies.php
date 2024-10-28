<?php
class Solution {

    /**
     * @param Integer[] $candies
     * @param Integer $extraCandies
     * @return Boolean[]
     */
    function kidsWithCandies($candies, $extraCandies) {
        $result =[];
        $max=max($candies);
        foreach($candies as $candy){
            $result[] = ($candy + $extraCandies >= $max);
        }
        return $result;
    }
}
