<?php
class Solution {

    /**
     * @param Integer[][] $mat
     * @param Integer $k
     * @return Integer[]
     */
    function kWeakestRows($mat, $k) {
        $result=[];

        foreach($mat as $i=> $row){
            $indice= array_count_values($row);
            $result[$i] = $indice[1];
        }
        asort($result);
        $result= array_keys($result);
        return  array_slice($result, 0, $k);
    }
}
