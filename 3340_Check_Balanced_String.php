<?php
class Solution {

    /**
     * @param String $num
     * @return Boolean
     */
    function isBalanced($num) {
        $even=0;
        $odd=0;
        $length= strlen($num);
        for($i=0;$i<=$length;$i++){
            if($i%2 == 0){
            $even += (int)$num[$i];
            }
            else{
                $odd += (int)$num[$i];   
            }
                
        }
        return $even==$odd;
    }
}
