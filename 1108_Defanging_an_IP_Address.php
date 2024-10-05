<?php
class Solution {

    /**
     * @param String $address
     * @return String
     */
    function defangIPaddr($address) {
        $result = '';
        for ($i = 0; $i < strlen($address); $i++) {
            $result .= ($address[$i] === '.') ? '[.]' : $address[$i];
        }
        return $result;
    }
}
