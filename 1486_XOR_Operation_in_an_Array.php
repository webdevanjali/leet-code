<?php
    class Solution {

        /**
        * @param Integer $n
        * @param Integer $start
        * @return Integer
        */
        function xorOperation($n, $start) {
            $nums=[];
            $output=null;
            for($i=0;$i<$n;$i++){
                $nums[$i]=$start +2 * $i;
                $output = $output ^ $nums[$i] ;
                
            }
            return $output;
        }
    }
