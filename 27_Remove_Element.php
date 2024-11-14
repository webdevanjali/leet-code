<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        $count = count($nums);
        for ($i = 0; $i < $count; $i++) {
            if ($nums[$i] !== $val) $k++;
            else unset($nums[$i]);
            
        }
        return $k;
    }
}
