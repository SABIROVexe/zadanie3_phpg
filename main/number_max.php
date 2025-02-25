<?php
$numbers = [123, 32, 34, 123, 43, 432.2, 2432, 543, 12, 10];



for ($i = 0; $i < count($numbers) - 1; $i++) {
    for ($j = 0; $j < count($numbers) - $i - 1; $j++) {
        if ($numbers[$j] < $numbers[$j + 1]) {
            $temp = $numbers[$j];
            $numbers[$j] = $numbers[$j + 1];
            $numbers[$j + 1] = $temp;
        }
    }
}
echo $numbers[2]; 