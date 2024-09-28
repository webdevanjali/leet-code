class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function minimumOperations($nums) {
        $operation=0;
        foreach ($nums as $num){
            if ($num%3!=0){
                $op++;
            }
        }
        return $operation;
    }
}
