<?php
class Solution {

    /**
     * @param Integer[][] $accounts
     * @return Integer
     */
    function maximumWealth($accounts) {
        foreach($accounts as $account){
            $sum = 0;
            for($j=0;$j<count($account);$j++){
                $sum += $account[$j];
            }
            $max = max($max,$sum);
        }
        return $max;
    }
}
