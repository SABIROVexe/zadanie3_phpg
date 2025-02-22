<?php
$numbers = [123, 32, 34, 123, 43, 432.2, 2432, 543, 12, 10];

rsort($numbers);

echo "Отсортированный массив:\n";
print_r($numbers);

echo $numbers[2]; 