<?php
class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer[][]
     */
    function largestLocal($grid) {
        $output=[];
        $resultGrid= (count($grid[0])-2);
        for($row=0; $row<$resultGrid;$row++){
            
            for($col=0;$col<$resultGrid;$col++){
                $max=0;
                for($i=0;$i<3;$i++){
                    for($j=0;$j<3;$j++){
                        $max = max($max,$grid[$row+$i][$col+$j]);

                    }
                }
                $output[$row][$col]=$max;
            }
        }
        return $output;
    }
}
