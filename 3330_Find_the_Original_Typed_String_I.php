<?php
class Solution {

    /**
     * @param String $word
     * @return Integer
     */
    function possibleStringCount($word) {
        $char=[];
        $duplicate=0;
        $len=strlen($word);
           for ($i=0;$i<$len;$i++){
               if($word[$i]==$word[$i-1] && in_array($word[$i], $char)) $duplicate++;
               else $char[]=$word[$i];
               
           }
        return $duplicate +1;
    }
}
