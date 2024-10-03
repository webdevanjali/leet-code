<?php 
class Solution {

    /**
     * @param String[] $operations
     * @return Integer
     */
    function finalValueAfterOperations($operations) {
        $x=0;
        foreach($operations as $operation){
            switch ($operation) {
                case "X++":
                    $x++;
                    break;
                case "X--":
                    $x--;
                    break;
                case "++X":
                    ++$x;
                    break;
                case "--X":
                    --$x;
                    break;
                default:
                    echo "Invalid operation.";
                    break;
            }
        }
        return $x;
    }
}

//Another method
    function finalValueAfterOperationsSecond($operations) {
        $ans=0;
        foreach($operations as $x){
            if($x=='++X' || $x=='X++')$ans++;
            elseif($x=='--X' || $x=='X--') $ans--;
        }
        return $ans;
    }
