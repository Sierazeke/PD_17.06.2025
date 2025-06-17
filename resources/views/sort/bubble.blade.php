<?php
function bubbleSort(array $numbers) {
    
    $n = count($numbers);
    
    for ($i = 1; $i < $n; $i++) {
        for ($j = $n - 1; $j >= $i - 1; $j--) {
            if ($numbers[$j - 1] > $numbers[$j]) {
                $temp = $numbers[$j - 1];
                $numbers[$j - 1] = $numbers[$j];
                $numbers[$j] = $temp;
            }
        }
    }
    return $numbers;
}
$numbers = array(1, 8, 3, 19, 46, 17, 38, 81, 80, 45);
$result = bubbleSort($numbers);
print_r($result);