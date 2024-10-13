<?php
class Solution {

    /**
     * @param String[] $words
     * @param String $x
     * @return Integer[]
     */
    function findWordsContaining($words, $x) {
        $indices=[];
        foreach($words as $indice => $word){
            for($i=0;$i<strlen($word);$i++){
                if($word[$i]==$x){
                    $indices[]=$indice;
                    break;
                }
            }
        }
        return $indices;
    }
}
