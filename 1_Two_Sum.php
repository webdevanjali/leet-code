// your code goes here 
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
     function twoSum($nums, $target) {
        $index=[];
        foreach($nums as $i => $num){
            $complement = $target - $num;
            if ($complement==$num && count(array_keys($nums, $complement))>1){
               $index= array_keys($nums, $complement);
                return $index;
            }
            elseif ($complement!=$num && array_search($complement, $nums)){
               array_push($index, $i,array_search($complement, $nums));
                return $index;
            }
        }
    }
}
