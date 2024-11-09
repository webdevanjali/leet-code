<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $maximumBit
     * @return Integer[]
     */
    function getMaximumXor($nums, $maximumBit) {
        $xor[0] = $nums[0] ^ (pow(2, $maximumBit) - 1); 
        for ($i = 1; $i < count($nums); $i++) {
            $xor[$i] = $nums[$i] ^ $xor[$i - 1];
        }
        return array_reverse($xor);
    }
}
