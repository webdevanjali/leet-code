class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function getConcatenation($nums) {
        $ans=$nums;
        $n =count($nums);
        foreach($nums as $index =>$num){
            $ans[$n+$index]=$num;
        }
        return $ans;
    }
}
