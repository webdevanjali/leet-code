<?php
class Solution {

    /**
     * @param String[] $names
     * @param Integer[] $heights
     * @return String[]
     */
    function sortPeople($names, $heights) {
        for ($i=0;$i<sizeof($heights);$i++){
            $tuple[$heights[$i]] = $names[$i];
        }
        krsort($tuple);
        return array_values($tuple);
    }
}
