<?php
class Solution {

    /**
     * @param Integer $n
     * @param Integer $m
     * @return Integer
     */
    function differenceOfSums($n, $m) {
        $num1=0;
        $num2=0;
        for($i=1;$i<=$n;$i++){
            echo $i;
            if($i%$m==0){
                $num1+=$i;
                echo " n1 is $num1 \n";
            }
            else{
                 $num2+=$i ;
                 echo " n2 is $num2 \n";
            } 
        }
        echo $num1,$num2;
        return $num2-$num1;
    }
}
