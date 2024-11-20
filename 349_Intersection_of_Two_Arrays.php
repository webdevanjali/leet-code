<?php
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function intersection($nums1, $nums2) {
        $nums1= array_unique($nums1);
        $nums2= array_unique($nums2);
        sort($nums1);
        sort($nums2);
        
        if (count($nums1) < count($nums2)) { $smallArr=$nums1; $longArr= $nums2; }
        else { $smallArr=$nums2; $longArr= $nums1;}

        $len = count($smallArr);
        $result=[];

        for($i=0; $i<$len; $i++){
            if( in_array($smallArr[$i], $longArr) && !(in_array($smallArr[$i], $result)) ) $result[]= $smallArr[$i] ;
        }
        
        return $result;
    }
}
