<?php
class Solution {

    /**
     * @param Integer $n
     * @return Integer[]
     */
    function lexicalOrder($n) {
        $lexi=array();
        $leadingDigit=1;
        for($i=1;$i<=$n;$i++){
            array_push($lexi,$leadingDigit);
            if($leadingDigit*10<=$n){
                $leadingDigit*=10;
            }else{
                while($leadingDigit%10==9 || $leadingDigit>=$n){
                    $leadingDigit= floor($leadingDigit/10);
                    
                }
                $leadingDigit++;
            }
        }
        return $lexi;
    }
}
?>
