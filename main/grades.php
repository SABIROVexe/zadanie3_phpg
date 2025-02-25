<?php
$grades = [5, 3, 2, 5, 2, 3, 4, 5, 3, 2, 5];
$sum = 0; 

$count = count($grades);

for ($i = 0; $i < $count; $i++) {
    $sum += $grades[$i]; 
}

echo $sum / $count;
