<?php
class Solution {

    /**
     * @param Integer[] $encoded
     * @param Integer $first
     * @return Integer[]
     */
    function decode($encoded, $first) {
        $decoded=[$first];
        for($i=0;$i<count($encoded);$i++){
            $decoded[$i + 1] = $encoded[$i] ^ $decoded[$i];
        }
        return $decoded;
    }
}
