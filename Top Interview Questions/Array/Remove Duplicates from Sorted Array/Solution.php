class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        for ($i = 0; $i < count($nums); $i++){
            
            if ($i+1 == count($nums)){
                // skip last element
            } else {
                if ($nums[$i] == $nums[$i+1]){
                    array_splice($nums,$i,1);
                    $i--;
                }
            }          
        }
        
        return count($nums);
    }
}
