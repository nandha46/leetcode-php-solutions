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
                if (count($nums) == $i + 1 + $moved){
                    break;
                }
                if ($nums[$i] == 0){
                    array_splice($nums, $i, 1);
                    $nums[] = 0;
                    $moved++;
                    $i--;
                }
            }
        }
    }
    // This is the better solution
    function moveZeroes2(&$nums) {
        for($i = 0; $i < count($nums); $i++){
            if($nums[$i] === 0){
                unset($nums[$i]);
                $nums[] = 0;
            }
        }
    }

}	
	$nums = array(0,0,1,0,0,3,12,0,0,0);
	$obj = new Solution();
	$obj->moveZeroes2($nums);
    print_r($nums);
?>