<?php
class Solution {

    /**
     * @param Integer[] $hours
     * @param Integer $target
     * @return Integer
     */
    function numberOfEmployeesWhoMetTarget($hours, $target) {
        $result =0;
        foreach($hours as $hour){
            if ($hour>=$target) $result++;
        }
        return $result;
    }
}
