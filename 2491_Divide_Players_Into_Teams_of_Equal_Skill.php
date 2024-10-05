<?php
class Solution {

    /**
     * @param Integer[] $skill
     * @return Integer
     */
    function dividePlayers($skill) {
        sort($skill);
        $size = sizeof($skill);
        $chemistry=0;
        $strength = $skill[0]+$skill[$size-1];
        for($i=1;$i <= $size / 2 ; $i++){
            $player1=$skill[$i-1];
            $player2=$skill[$size- $i];
            //  echo  $player1."+".$player2 ."=".$player1+$player2." or  $strength \n";
            if ($player1 + $player2 == $strength) {
                $chemistry += $player1 * $player2; 
            } else {
                return -1; 
            }

        }
        return $chemistry;
    }
}
