<?php
class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function smallestEvenMultiple($n) {
        if ($n%2) return $n*2;
        return $n;
    }
}
