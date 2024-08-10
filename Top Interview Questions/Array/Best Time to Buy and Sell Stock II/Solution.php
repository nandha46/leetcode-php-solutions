class Solution {

/**
 * @param Integer[] $prices
 * @return Integer
 */
function maxProfit($prices) {

    $profit = 0;
    
    for ($i = 0; $i < count($prices); $i++){
        if ($i != 0){
            if ($prices[$i] < $prices[$i-1] && $prices[$i] != $prices[$i-1]) {
                $profit += $prices[$i] - $prices[$i-1];
            }
        }
    }
    return $profit;
}
}