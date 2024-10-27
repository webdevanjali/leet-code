<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function sumIndicesWithKSetBits($nums, $k) {
        $sum=0;
        foreach($nums as $indice => $num){
            $binary = decbin($indice);
            $setbits=0;
            //below for counts the number of one's in $binary
             for($i=0; $i<strlen($binary);$i++){
                if($binary[$i]==1) $setbits++;
             }
             // if the count of 1's in binary == K add that array value to sum
             if ($setbits == $k){
                $sum+=$num;
             }
        }
        return $sum;
    }
}
