class Solution {

/**
 * @param Integer[] $nums
 * @return Boolean
 */
function containsDuplicate($nums) {
    if (count(array_unique($nums), SORT_NUMERIC) == count($nums)){
        return false;
    } else {
         return true;
    }
}
}