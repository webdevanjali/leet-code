class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function buildArray($nums) {
       $ans=[];
        foreach($nums as $num){
            array_push($ans,$nums[$num]);
        }
        return $ans;
    }
}
