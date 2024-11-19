<?php
class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function countNegatives($grid) {
        $rowlength= count($grid[0]);
        $rows=count($grid);
        $negCount=0;
        for($i=0; $i<$rows; $i++){
            $row = $grid[$i];
            for($col=0; $col<$rowlength; $col++){
                if($row[$col]<0){
                    $negCount += $rowlength - $col;
                    break;
                }
            }
        }
        return $negCount;
    }
}
