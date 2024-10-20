<?php
class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function maximum69Number ($num) {
        return preg_replace('/6/', '9', $num, 1);
    }
}
