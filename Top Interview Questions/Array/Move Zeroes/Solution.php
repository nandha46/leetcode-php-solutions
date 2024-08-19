<?php 

class Solution {
	
	/**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        if (count($nums) == 1){
            
        } else {
            $moved = 0;
            for ($i = 0; $i < count($nums); $i++ ){
                echo $i;
                if (count($nums) - $i - 1 == $moved){
                    break;
                }
                if ($nums[$i] == 0){
                    array_splice($nums, $i, 1);
                    $nums[] = 0;
                    $moved++;
                }
            }
        }
    }

}	
	$nums = array(1,0,0,3,12);
	$obj = new Solution();
	$obj->moveZeroes($nums);
	print_r($nums);
    print_r(array(1,3,12,0,0));

?>