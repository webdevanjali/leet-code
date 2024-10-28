<?php
class Solution {

    /**
     * @param String $date
     * @return String
     */
    function convertDateToBinary($date) {
        // return decbin(substr($date, 0, 4))."-".decbin(substr($date, 5, 2))."-".decbin(substr($date, 8, 2));
       return implode("-", [
            decbin(substr($date, 0, 4)),
            decbin(substr($date, 5, 2)),
            decbin(substr($date, 8, 2))
        ]);
    }
}
