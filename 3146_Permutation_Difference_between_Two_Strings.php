<?php
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Integer
     */
    function findPermutationDifference($s, $t) {
        $permutation=0;
        for($i=0;$i<strlen($s);$i++){
            $char=$s[$i];
            $permutation += abs($i - strpos($t,$char));
        }
        return $permutation;
    }
}
